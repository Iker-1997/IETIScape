$(document).ready(function () {
    $("#joinGame").click(function () {
        getUsers().then(updatePlayers);
    });

    
});

function createGame(val){
    let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let teamName = $("#teamName").val();
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
        }
    });
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

function getUsers() {
    let csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let id = document.getElementById("game-id").value;

    return new Promise(function (resolve, reject) {
        fetch("/api/games", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrf,
            },
            body: JSON.stringify({ id }),
        })
            .then((response) => response.json())
            .then((users) => {
                resolve(users);
            });
    });
}

function updatePlayers(users) {
    const players = document.getElementById("players");
    while (players.firstChild) {
        players.removeChild(players.firstChild);
    }
    users.forEach((user) => {
        const userLi = document.createElement("li");
        userLi.innerHTML = user.name;
        players.appendChild(userLi);
    });
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
