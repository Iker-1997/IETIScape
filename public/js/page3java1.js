$(document).ready(function () {
    $('#verPeriodico').bind( 'click', function (){
        if ($('#periodico').hasClass('hidden')){
            $('#periodico').removeClass('hidden');
            $('#verPeriodico').removeClass('xl:block');
        }
    });

    $('#periodico').bind( 'click', function (){
        $('#periodico').addClass('hidden');
        $('#verPeriodico').addClass('xl:block');
    });

    console.log("La solucion es: CALMA");
});