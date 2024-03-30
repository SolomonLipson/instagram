
function open1()
{
  window.location.href="https://googleplay.com";
}
function open2(){
  window.location.href="https://apps.microsoft.com";
}
  function toggleButtonVisibility() {
      var passwordInput = document.getElementById("password");
      var showPasswordBtn = document.getElementById("showPasswordBtn");

      showPasswordBtn.style.display = passwordInput.value.trim() !== '' ? 'inline-block' : 'none';
    }

    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    }