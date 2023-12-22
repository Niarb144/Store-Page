function validateForm() {
    var password = document.getElementById("password").value;
    var passwordError = document.getElementById("passwordError");

    // Password should be at least eight characters long and contain a number and special character
    var passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

    if (!passwordRegex.test(password)) {
        passwordError.innerHTML = "Password must be at least eight characters long and contain a number and special character.";
        return false;
    } else {
        passwordError.innerHTML = "";
        return true;
    }
}

function togglePassword() {
    var passwordInput = document.getElementById("password");
    var toggleBtn = document.querySelector(".toggle-password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleBtn.textContent = "Hide";
    } else {
        passwordInput.type = "password";
        toggleBtn.textContent = "Show";
    }
}
