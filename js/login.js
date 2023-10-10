document.getElementById("switch-to-signup").addEventListener("click", function(event) {
  event.preventDefault();

  document.getElementById("login-form").classList.add("fade-out");
  document.getElementById("signup-form").classList.remove("fade-out");

  setTimeout(function() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
    document.getElementById("login-form").classList.remove("fade-out");
    document.getElementById("signup-form").classList.add("fade-in");
  }, 500);
});

document.getElementById("switch-to-login").addEventListener("click", function(event) {
  event.preventDefault();

  document.getElementById("signup-form").classList.add("fade-out");
  document.getElementById("login-form").classList.remove("fade-out");

  setTimeout(function() {
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
    document.getElementById("signup-form").classList.remove("fade-out");
    document.getElementById("login-form").classList.add("fade-in");
  }, 500);
});