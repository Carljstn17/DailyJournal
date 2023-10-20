<?php
session_start();

include("../controller/function.php");
include_once("../controller/connection.php");

check_login($conn);
$user_id = $_GET['user_id'];

$query = mysqli_query($conn,"select * from user_info where user_id='$user_id'"); 
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="../css/profile.css">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $.get("nav.html", function(data){
      $("#nav-container").replaceWith(data);
  });
  </script>
</head>
<body data-page="profile">
 
<main>
  <div class="grid-container">

  <p class="h1">Profile</p>

    <div class="grid-row-1">
      
      <div class="name-con">

       <p class="username">@<?php echo $row['user_name']; ?></p>
      
      
      </div>
      
    </div>
    <div class="grid-row-2">
      <form action="../controller/insert-desc.php" method="post">
    <textarea type="text" class="desc"  name="descr" ><?php echo $row['descr'] ?></textarea>
    <button type="submit" name="submit" id="save" title="save" ><span class="material-symbols-outlined">
reply
</span></button>
    </form>
    </div>

    <div class="grid-row-3">
      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/V8pimNR30Fo?controls=0&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </div>
  </div>
  
<!-- Your existing HTML code for the modal -->


</main>
  <div id="nav-container"></div>
  <script>
    
  </script>
  
<!-- <script src="../js/profile.js"></script> -->
</body>
</html>
