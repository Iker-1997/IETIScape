$(document).ready(function () {

    $('#verFelpudo').bind( 'click', function (){
        if ($('#felpudo').hasClass('hidden')){
            $('#felpudo').removeClass('hidden');
        }
    });

    $('#felpudo').bind( 'click', function (){
        $('#felpudo').addClass('hidden');
    });

    $("#view2clue1").bind("click", function(){
        alert(datos['clue1']);
    });

    $("#view2clue2").bind("click", function(){
        alert(datos['clue2']);
    });

    $("#comproveView2").bind("click", function(){
        let answer = $("#inputView2").val();
        answer = answer.toUpperCase();
        let solution = datos['solution'];
        solution = solution.toUpperCase();
        if(answer == solution){
            location.href = "/third";
        }else{
            alert("RESPUESTA INCORRECTA");
        }
    });
});