<?php
session_start();

include("../controller/function.php");
include_once("../controller/connection.php");
check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link rel="stylesheet" href="../css/default.css">
  <link rel="stylesheet" href="../css/create.css">
  <link rel="icon" type="image/x-icon" href="../media/favicon-white.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $.get("nav.html", function(data){
      $("#nav-container").replaceWith(data);
  });
  </script>
</head>
<body data-page="create">
  <div class="body">
  <p>Create Journal</p>
  
  <main>
    <form id="insert-form" class="insert-form" action="../controller/insert.php" method="post">
    
    <div class="form-head">
      <label for="title" class="primary title">Title |</label>
      <input type="text" id="title" name="title" class="title-text secondary" placeholder="Create title*" required>
    </div>

    <div class="form-sub">
      <div>
        <label for="combo">Category </label>
        <select id="combo" name="category" class="default">
          <option value="Home">Home</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
          <option value="Peers">Peers</option>
          <option value="Others">Others</option>
        </select>
      </div>
    
      <div class="right">
        <label for="date">Select a date:</label>
        <input type="date" id="date" name="date" class="default">
      </div>
    </div>
    
    <textarea name="content" id="textarea" class="default"></textarea>

    <input type="submit" value="Publish" class="btnn default">
  </form>

  </main>

  <footer>
    <p class="h2">© 2023 Project <span class="right">10/09/23</span></p>
  </footer>  
  </div>
  
  <div id="nav-container"></div>

</body>
</html>