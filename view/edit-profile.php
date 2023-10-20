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
    <div class="grid-row-1">
      
      <div class="name-con">
      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT user_name FROM user_info WHERE user_id = '$user_id' ";
      $result = mysqli_query($conn, $query);     

      while($row = mysqli_fetch_assoc($result)){
      ?>
      <p class="h1">Profile</p>
       <h1 class="username">@<?php echo $row['user_name']; ?></h1>
      
        <?php
      }
      

      ?>
      
      </div>
      
    </div>
    <div class="grid-row-2">
      <form action="../controller/insert-desc.php" method="post">
    <input type="text" class="desc"  name="descr" placeholder="enter description">
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
