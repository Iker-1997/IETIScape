$(document).ready(function () {

    $("#view5clue").bind("click", function(){
        if (role == "java"){
            alert(datos['clue1']['java']);
        }else{
            alert(datos['clue1']['django']);
        }
    });

    $("#comproveView5").bind("click", function(){
        let answer = $("#inputView5").val();
        answer = answer.toUpperCase();
        let solution = "";
        if (role == "java"){
            solution = datos['solution']['java'];
            solution = solution.toUpperCase();
        }else{
            solution = datos['solution']['django'];
            solution = solution.toUpperCase();
        }
        if(answer == solution){
            console.log("ACIERTOOO");
        }else{
            alert("RESPUESTA INCORRECTA");
        }
        /*
        
        if (role == "java"){
            let solution = datos['solution']['java'];
            solution = solution.toUpperCase();
        }else{
            solution = datos['solution']['django'];
            solution = solution.toUpperCase();
        }
        if(answer == solution){
            console.log("ACIERTOOO");
        }else{
            alert("RESPUESTA INCORRECTA");
        }*/
    });
});