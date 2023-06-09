document.addEventListener("DOMContentLoaded", () => {
    const loginURL = document.getElementById("login-url").value;
    const loginMain = document.getElementById("login-main");

    loginMain.addEventListener("submit", function(e) {
        e.preventDefault();

        let username = document.getElementById("username").value;
        let userpass = document.getElementById("userpass").value;

        if (username == "") {
            document.getElementById("username").focus();
            return;
        }

        if (userpass == "") {
            document.getElementById("userpass").focus();
            return;
        }

        axios
            .post(loginURL, { username: username, userpass: userpass })
            .then((res) => {
                let response = res.data;

                if (res.data.status) {
                    console.log(response);
                }
            })
            .catch((err) => {
                console.error(err);
            });

        console.log(`${username} ${loginURL}`);
    });
});