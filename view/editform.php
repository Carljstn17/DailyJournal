<?php
session_start();

include("../controller/function.php");
include_once("../controller/connection.php");
check_login($conn);

$form_id = $_GET['form_id'];

$query = mysqli_query($conn,"SELECT * FROM form WHERE form_id='$form_id'"); 
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
</head>
<body data-page="list">
  <div class="body">
  <p>Edit Journal</p>
  
  <main>
    <form id="insert-form" class="insert-form" action="../controller/editformvalid.php" method="post">

    
    <div class="form-head">
    <p class="form-id">Form no. <?php echo $row['form_id'] ?></p>
    <input type="hidden" name="form_id" value="<?php echo $row['form_id'] ?>">

      <label for="title" class="primary title">Title |</label>
      <input type="text" id="title" name="title" class="title-text secondary" placeholder="<?php echo $row['title']?>">
    </div> 

    <div class="form-sub">
      <div>
        <label for="combo">Category </label>
        <select id="combo" name="category" class="default" <?php echo $row['category'] ?>>
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
    
    <textarea name="content" id="textarea" class="default"><?php echo $row['content'] ?></textarea>

    <input type="submit" value="Save" class="edit default">
    <button class="btnn default"><a href="javascript:history.go(-1)">Back</a></button>
  </form>

  </main>

  <footer>
    <p class="h2">© 2023 Project <span class="right">10/09/23</span></p>
  </footer>  
  </div>
  
  <div id="nav-container"></div>

</body>
</html>