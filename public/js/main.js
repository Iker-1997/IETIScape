$(document).ready(function () {
    $("#joinGame").click(function () {
        getUsers().then(updatePlayers);
    });

    $("#createGame").click(function () {
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
        }, 1000);
    });
});

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
