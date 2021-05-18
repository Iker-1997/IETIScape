$(document).ready(function(){

    $("#view1clue1").bind("click", function(){
        alert(datos['clue1']);
    });

    $("#view1clue2").bind("click", function(){
        alert(datos['clue2']);
    });

    $("#comproveView1").bind("click", function(){
        let answer = $("#inputView1").val();
        answer = answer.toUpperCase();
        if(answer == datos['solution']){
            location.href = "/where";
        }else{
            alert("RESPUESTA INCORRECTA");
        }
    });
});