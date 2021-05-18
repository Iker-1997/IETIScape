$(document).ready(function () {

    $("#view4clue1").bind("click", function(){
        alert(datos['clue1']);
    });

    $("#view4clue2").bind("click", function(){
        alert(datos['clue2']);
    });

    $("#comproveView4").bind("click", function(){
        let answer = $("#inputView4").val();
        answer = answer.toUpperCase();
        let solution = datos['solution'];
        solution = solution.toUpperCase();
        if(answer == solution){
            location.href = "/fifth";
        }else{
            alert("RESPUESTA INCORRECTA");
        }
    });
});