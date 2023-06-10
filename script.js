function togglePasswordField() {
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.getElementById("togglePassword");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.add("password-visible");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("password-visible");
  }
}
