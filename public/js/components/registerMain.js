document.addEventListener("DOMContentLoaded", () => {
    const registerURL = document.getElementById("register-url").value;
    const registerMain = document.getElementById("register-main");
    const inputUsername = document.getElementById("username");

    inputUsername.addEventListener("change", function(e) {
        e.preventDefault();
        document.getElementById("username").style.border = "none";
    });

    registerMain.addEventListener("submit", function(e) {
        e.preventDefault();

        let username = document.getElementById("username").value;
        let userpass = document.getElementById("userpass").value;
        let userPhone = document.getElementById("userPhone").value;
        let userEmail = document.getElementById("userEmail").value;

        if (username == "") {
            document.getElementById("username").focus();
            return;
        }

        if (userpass == "") {
            document.getElementById("userpass").focus();
            return;
        }

        if (userPhone == "") {
            document.getElementById("userPhone").focus();
            return;
        }

        if (userEmail == "") {
            document.getElementById("userEmail").focus();
            return;
        }

        let params = {
            action_: "register",
            username: username,
            userpass: userpass,
            userPhone: userPhone,
            userEmail: userEmail,
        };

        axios
            .post(registerURL, params)
            .then((res) => {

                let backLoginUrl = document.getElementById("back-login-url").href;
                let status = res.data.data.status;
                let text = res.data.data.text;

                if (status == 1) {
                    Swal.fire({
                        icon: "success",
                        text: text,
                    }).then(function(e) {
                        window.location.href = backLoginUrl;
                    });

                } else {
                    Swal.fire({
                        icon: "error",
                        text: text,
                    }).then(function(res) {
                        document.getElementById("username").style.border = "1px solid red";
                    });
                }
            })
            .catch((err) => {
                console.error(err);
            });
    });
});