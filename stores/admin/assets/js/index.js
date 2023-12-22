function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.style.backgroundImage = "url('./img/eye-off.png')"; // Include an eye-off icon for visibility toggle
    } else {
        passwordInput.type = "password";
        toggleIcon.style.backgroundImage = "url('./img/eye.png')";
    }
}
