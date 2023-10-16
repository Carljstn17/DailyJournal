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
  <script src="../js/navlist.js"></script>
</head>
<body data-page="list">
  <div class="body">
  <header>
    <p>List</p>

    <p class="desc">In the pages of a journal, our stories come alive, whispered to the <span class="primary">future</span></p>
  </header>

  <nav class="navbar">
            <ul>
                <li class="nav-item Home active" onclick="showCategory('Home')">Home</li>
                <li class="nav-item Personal" onclick="showCategory('Personal')">Personal</li>
                <li class="nav-item School" onclick="showCategory('School')">School</li>
                <li class="nav-item Peers" onclick="showCategory('Peers')">Peers</li>
                <li class="nav-item Others" onclick="showCategory('Others')">Others</li>
            </ul>
        </nav>

  <main>

    <div class="container Home">
      <p class="secondary">Excellence is not a skill. It is an attitude.</p>

      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Home' ORDER BY form_id DESC";
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
  
    <div class="container Personal"  style="display:none;">

      <p class="secondary">In the quiet moments, soul speaks loudest.</p>
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

    <div class="container School"  style="display:none;">

      <p class="secondary">Sweat is the ink, effort is the story.</p>
      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'School' ORDER BY form_id DESC";
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

    <div class="container Peers"  style="display:none;">

    <p class="secondary">Every step forward is a dance of progress.</p>

      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Peers' ORDER BY form_id DESC";
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

    
    <div class="container Others"  style="display:none;">

      <p class="secondary">The beauty of life lies in our connections with others.</p>
      <?php
      $user_id=$_SESSION['user_id'];

      $query = "SELECT * FROM form WHERE user_id = '$user_id' AND category = 'Others' ORDER BY form_id DESC";
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
  <p class="h2">© 2023 Project <span class="right">10/09/23</span></p>
  </footer>  
  </div>
  
  <div id="nav-container"></div>
  
  <script>
    
  </script>

</body>
</html>