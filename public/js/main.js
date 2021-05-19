function joinGame(val){
    let gameId = $("#game-id").val();

    if(gameId == ""){
        $("#spanJoin").text("El valor está vacio. Rellena el campo.");
    }else{
        $("#spanJoin").text("");
        $("#spanCreate").text("");
        let csrf = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
        let userId = val;
        fetch("api/joinGame/" + userId + "/" + gameId, {
            method: "GET",
            headers: {
                'Content-Type': 'application/json',
                "Accept": 'application/json',
                "X-CSRF-TOKEN": csrf
            }}).then(function(res) {
                getUsers().then(updatePlayers);
            }).catch(function(err) {
                console.error(err)
            });
    }
}

function createGame(val){
    let teamName = $("#teamName").val();

    if(teamName == ""){
        $("#spanCreate").text("El valor está vacio. Rellena el campo.");
    }else{
        $("#spanCreate").text("");
        $("#spanJoin").text("");
        let csrf = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
        $.ajax({
            url: "api/createGame/"+val+"/"+teamName,
            method: "GET",
            crossDomain : true,
            accepts: "application/json",
            dataType: 'json',
            headers: {
                'Content-Type': 'application/json',
                "Accept": 'application/json',
                "X-CSRF-TOKEN": csrf
            },
            success: function(res){
                $("#game-id").val(res['game_id']);
                $("#game-id").attr("readonly", "true");
                $("#joinGame").addClass("pointer-events-none");
                $("#joinGame").addClass("opacity-60");
                $("#joinGame").attr("tabindex", -1);
                poll(function () {
                    return new Promise(function (resolve, reject) {
                        getUsers().then((users) => {
                            if (users && users.length > 1) {
                                console.log("user joined!");
                                updatePlayers(users);
                                resolve(false);
                            } else {
                                console.log("no users joined yet!");
                                // este return false hace que poll() vuelva a ejecutarse
                                resolve(true);
                            }
                        });
                    });
                }, 3000);
            }
        });
    }
}

function getUsers() {
    let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let game_id = document.getElementById("game-id").value;
    return new Promise(function (resolve, reject) {
        fetch("/api/games", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrf,
            },
            body: JSON.stringify({game_id}),
        })
            .then((response) => response.json())
            .then((users) => {
                resolve(users);
            });
    });
}

function updatePlayers(users) {
    let numUsers = 0;
    const players = document.getElementById("players");
    while (players.firstChild) {
        players.removeChild(players.firstChild);
    }
    users.forEach((user) => {
        numUsers += 1;
        const userLi = document.createElement("li");
        userLi.innerHTML = user.name;
        players.appendChild(userLi);
    });
    if(numUsers > 1){
        $("#startGame").removeClass("pointer-events-none");
        $("#startGame").removeClass("opacity-60");
        $("#startGame").attr("tabindex", 0);
    }
}

function poll(callback, everyMs = 5000) {
    if (typeof callback === "function") {
        return new Promise(function (resolve, reject) {
            const tick = setInterval(function () {
                callback().then((result) => {
                    if (!result) {
                        clearInterval(tick);
                        return resolve();
                    }
                });
            }, everyMs);
        });
    }
}

function wannaBeJava(val){
    let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let userId = val;
    fetch("/api/assignRole/" + userId + "/1", {
        method: "GET",
        headers: {
            'Content-Type': 'application/json',
            "Accept": 'application/json',
            "X-CSRF-TOKEN": csrf
        }}).then(function(res) {
            location.href = "/intro";
        }).catch(function(err) {
            console.error(err);
        });
}

function wannaBeDjango(val){
    let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let userId = val;
    fetch("/api/assignRole/" + userId + "/2", {
        method: "GET",
        headers: {
            'Content-Type': 'application/json',
            "Accept": 'application/json',
            "X-CSRF-TOKEN": csrf
        }}).then(function(res) {
            location.href = "/intro";
        }).catch(function(err) {
            console.error(err);
        });
}