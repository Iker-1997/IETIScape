$(document).ready(function () {

    $("#view5clue").bind("click", function(){
        if (role == "java"){
            alert(datos['clue1']['java']);
        }else{
            alert(datos['clue1']['django']);
        }
    });

    $("#comproveView5").bind("click", function(){
        let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

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
            fetch("api/endGame/", {
                method :  "GET",
                headers: {
                    'Content-Type': 'application/json',
                    "Accept": 'application/json',
                    "X-CSRF-TOKEN": csrf
                }}).then(function(res) {
                    location.href = "/end";
                }).catch(function(err) {
                    console.error(err)
                });
        }else{
            alert("RESPUESTA INCORRECTA");
        }
    });
});