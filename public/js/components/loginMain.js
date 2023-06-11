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
                let status = res.data.data.status;
                let text = res.data.data.text;
                let toHomeUrl = document.getElementById("to-home-url").value;

                if (status == 1) {
                    Swal.fire({
                        icon: "success",
                        text: text,
                    }).then(function(e) {
                        window.location.href = toHomeUrl;
                    });
                    return;
                }

                Swal.fire({
                    icon: "error",
                    text: text,
                });
                return;
            })
            .catch((err) => {
                console.error(err);
            });
    });
});