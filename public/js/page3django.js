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

    $("#view3clue1").bind("click", function(){
        alert(datos['clue1']);
    });

    $("#view3clue2").bind("click", function(){
        alert(datos['clue2']);
    });

    $("#view3clue3").bind("click", function(){
        alert(datos['clue3']);
    });

    $("#comproveView3").bind("click", function(){
        let answer = $("#inputView3").val();
        answer = answer.toUpperCase();
        let solution = datos['solution'];
        solution = solution.toUpperCase();
        if(answer == solution){
            location.href = "/fourth";
        }else{
            alert("RESPUESTA INCORRECTA");
        }
    });
});