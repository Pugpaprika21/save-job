document.addEventListener("DOMContentLoaded", () => {
    const registerURL = document.getElementById("register-url").value;
    const registerMain = document.getElementById("register-main");

    registerMain.addEventListener("submit", function(e) {
        e.preventDefault();

        let username = document.getElementById("username").value;
        let userpass = document.getElementById("userpass").value;
        let userPhone = document.getElementById("userPhone").value;
        let userEmail = document.getElementById("userEmail").value;
    });
});