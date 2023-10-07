<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DailyJournal</title>
  <link rel="icon" type="image/x-icon" href="../media/favicon-white.png">
  <link rel="stylesheet" href="../css/default.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container">
    <form id="login-form" class="login-form" action="../controller/login.php" method="post">
        <h2>/welcome</h2>
        <div class="form-group">
            <input type="text" id="user_name" name="user_name" required>
            <label for="user_name">Username</label>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password"required>
            <label for="password">Password</label>
            <a href="#" id="switch-to-forget" class="forget">forget password?</a>
        </div>
        <div class="form-group">
            <center><input type="submit" value="Login" class="btn"></center>
        </div>
        <p>Not registered yet? <a href="#" id="switch-to-signup">Create an account</a></p>
    </form>

    <form id="signup-form" class="signup-form" action="../controller/signup.php" method="post">
        <h2>/signup</h2>
        <div class="form-group">
          <input type="text" id="user_name" name="user_name" required>
          <label for="user_name">Create Username</label>
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password"required>
            <label for="password">Create Password</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Confirm" class="btn">
        </div>
        <p>Already have an account? <a href="#" id="switch-to-login">Login</a></p>
    </form>
</div>

  <script>
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

  </script>
</body>
</html>
