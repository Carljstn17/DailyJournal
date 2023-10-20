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
  <link rel="icon" type="image/x-icon" href="../media/favicon-white.png">


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
        <?php
        $user_id = $_SESSION['user_id'];

        $query = "SELECT user_name FROM user_info WHERE user_id = '$user_id' ";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
          ?>

          <p class="username">@<?php echo $row['user_name']; ?></p>

          <?php
        }

        ?>

      </div>
      
    </div>
    <div class="grid-row-2">
      <?php
      $user_id = $_SESSION['user_id'];

      $query = "SELECT descr FROM user_info WHERE user_id = '$user_id' ";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_assoc($result)){
        $descr = $row['descr'];
        if (empty($descr)) {
          $descr = "no description yet.";
        }
        ?>
        <textarea class="desc" name="descr" readonly><?php echo $descr; ?></textarea>

        <?php
      }

      ?>
      <a href="edit-profile.php?user_id=<?php echo$user_id;?>"><button id="edit"><span class="material-symbols-outlined">
          edit
        </span></button></a>
    </div>

    <?php if(isset($_SESSION['user_id'])) { echo '<a href="../controller/logout.php" class="logout">Logout</a>';}
            else ?>

    <div class="grid-row-3">
      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/V8pimNR30Fo?controls=0&rel=0&showinfo=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </div>
  </div>

</main>
  <div id="nav-container"></div>
  <script>

  </script>

</body>
</html>
