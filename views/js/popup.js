$('body').on('hide.bs.modal' , '.modal', function (){
    $('video').trigger('pause');
});