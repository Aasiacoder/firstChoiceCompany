// Loginb & Signup Script file

function login() {
    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;

    fetch("../login/login.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert(data.message);
                window.location.href = data.redirect; // Redirecting to home index.php
            } else {
                alert("Login failed: " + data.message);
                document.getElementById("signup-form").style.transform = "translateX(-100%)";
                document.getElementById("login-form").style.transform = "translateX(-100%)";
            }
        });
}


// Signup Function
function signup() {
    const name = document.getElementById("signup-name").value;
    const email = document.getElementById("signup-email").value;
    const password = document.getElementById("signup-password").value;

    fetch("../login/signup.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`

    })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                alert(data.message);
                window.location.href = data.redirect; // Redirecting ../index.php
            } else {
                alert("Signup failed: " + data.message);
                // Force signup form to remain visible
                document.getElementById("signup-form").style.transform = "translateX(100%)";
                document.getElementById("login-form").style.transform = "translateX(0%)";
            }
        });
}


document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const signupForm = document.getElementById("signup-form");
    const loginSwitch = document.getElementById("login-switch");
    const signupSwitch = document.getElementById("signup-switch");
    const showSignupLink = document.getElementById("show-signup");

    function showLogin() {
        signupForm.style.transform = "translateX(100%)";
        loginForm.style.transform = "translateX(0%)";
    }

    function showSignup() {
        signupForm.style.transform = "translateX(-100%)";
        loginForm.style.transform = "translateX(-100%)";
    }

    loginSwitch.addEventListener("click", showLogin);
    signupSwitch.addEventListener("click", showSignup);
    showSignupLink.addEventListener("click", function (e) {
        e.preventDefault();
        showSignup();
    });

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        login();
    });

    signupForm.addEventListener("submit", function (e) {
        e.preventDefault();
        signup();
    });
});