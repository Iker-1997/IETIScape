$(document).ready(function () {
    $('#verPeriodico').bind( 'click', function (){
        if ($('#periodico').hasClass('hidden')){
            $('#periodico').removeClass('hidden');
            $('#verPeriodico').removeClass('xl:block');
            $('#reproducirAudio').removeClass('xl:block');
        }
    });

    $('#periodico').bind( 'click', function (){
        $('#periodico').addClass('hidden');
        $('#verPeriodico').addClass('xl:block');
        $('#reproducirAudio').addClass('xl:block');
    });

    $('#reproducirAudio').bind( 'click', function(){
        document.getElementById('audio').play();
    });
});