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
  <link rel="stylesheet" href="../css/list.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $.get("nav.html", function(data){
      $("#nav-container").replaceWith(data);
  });
  </script>
</head>
<body data-page="list">
  <header>
    <p>List</p>

    <p class="desc">In the pages of a journal, our stories come alive, whispered to the <span class="primary">future</span></p>
  </header>

  <main>
    <p class="secondary">Personal</p>

    <p>In the quiet moments, soul speaks loudest.</p>
    <div class="container">

      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Personal' ORDER BY form_id DESC";
      $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="row">
            <a href="viewform.php?form_id=<?php echo $row['form_id'];?>" class="form-link">
                <div class="row-text">
                <p class="form-title"><?php echo $row['title']; ?></p>
                <p class="form-date primary"><?php echo $row['date']; ?></p>
                </div>
            </a>
        </div>
        <?php
      }

      ?>
    </div>

    <p class="secondary">Professional</p>

    <p>Excellence is not a skill. It is an attitude.</p>
    <div class="container">

      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Professional' ORDER BY form_id DESC";
      $result = mysqli_query($conn, $query);     

      while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="row">
            <a href="viewform.php?form_id=<?php echo $row['form_id'];?>" class="form-link">
                <div class="row-text">
                <p class="form-title"><?php echo $row['title']; ?></p>
                <p class="form-date primary"><?php echo $row['date']; ?></p>
                </div>
            </a>
        </div>
        <?php
      }
      

      ?>
    </div>
  

    <p class="secondary">Travel</p>

    <p>Sweat is the ink, effort is the story.</p>
    <div class="container">

      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Travel' ORDER BY form_id DESC";
      $result = mysqli_query($conn, $query);
      
      while($row = mysqli_fetch_assoc($result)){
      ?>
      <div class="row">
            <a href="viewform.php?form_id=<?php echo $row['form_id'];?>" class="form-link">
                <div class="row-text">
                <p class="form-title"><?php echo $row['title']; ?></p>
                <p class="form-date primary"><?php echo $row['date']; ?></p>
                </div>
            </a>
        </div>
        <?php
      }
      ?>
    </div>

  </main>

  <footer>

  </footer>  

  <div id="nav-container"></div>
      
  
</body>
</html>