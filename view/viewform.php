<?php
session_start();

include("../controller/function.php");
include_once("../controller/connection.php");
check_login($conn);

$form_id = $_GET['form_id'];

$query = mysqli_query($conn,"select * from form where form_id='$form_id'"); 
$row = mysqli_fetch_array($query);
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
    <script>
        document.getElementById('combo').removeAttribute('disabled');
    </script>
</head>
<body data-page="list">
  <div class="body">
  <p>View Journal</p>
  
  <main>
    <form id="insert-form" class="insert-form" action="" method="post">
    
    <div class="form-head">
      <label for="title" class="title secondary"><span class="primary">Title |</span> <?php echo $row['title'] ?></label>
      <input type="text" id="title" name="title" class="title-text secondary" readonly>
    </div>

    <div class="form-sub">
      <div>
        <label for="combo" class="secondary">Category </label>
        <select id="combo" name="category" class="default" <?php echo $row['category'] ?> disabled>
          <option value="Home">Home</option>
          <option value="Personal">Personal</option>
          <option value="School">School</option>
          <option value="Peers">Peers</option>
          <option value="Others">Others</option>
        </select>
      </div>
    
      <div class="right">
        <label for="date"><span class="secondary">Select a date:</span> <?php echo $row['date'] ?></label>
      </div>
    </div>

    
    <textarea name="content" id="textarea" class="default" readonly><?php echo $row['content'] ?> </textarea>

    <button class="edit default"><a href="editform.php?form_id=<?php echo$form_id;?>">Edit</a></button>
    <button class="edit default"><a href="../controller/deleteform.php?form_id=<?php echo$form_id;?>">Delete</a></button>
    <button class="btnn default"><a href="list-page.php">Back</a></button>
    
  </form>

  </main>

  <footer>
    <p class="h2">© 2023 Project <span class="right">10/09/23</span></p>
  </footer>  
  </div>
  
  <div id="nav-container"></div>


</body>
</html>