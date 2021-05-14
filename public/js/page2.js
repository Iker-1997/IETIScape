$(document).ready(function () {
    $('#verFelpudo').bind( 'click', function (){
        if ($('#felpudo').hasClass('hidden')){
            $('#felpudo').removeClass('hidden');
        }
    });
    $('#felpudo').bind( 'click', function (){
        $('#felpudo').addClass('hidden');
    });
});