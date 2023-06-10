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

        let loginData = {
            action_: "login",
            username: username,
            userpass: userpass,
        };

        axios
            .post(loginURL, loginData)
            .then((res) => {
                let response = res.data;
                console.log(response);
                // if (res.data.status) {
                //     console.log(response);
                // }
            })
            .catch((err) => {
                console.error(err);
            });
    });
});