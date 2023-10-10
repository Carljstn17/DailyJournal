<?php
session_start();

include("../controller/function.php");
include_once("../controller/connection.php");

check_login($conn);
$user_id=$_SESSION['user_id'];

$sql = "SELECT * FROM form Where user_id=$user_id ORDER BY form_id DESC";
$result = $conn->query($sql);

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
    <div class="container">
      <p class="secondary">Personal</p>

      <?php while($row = $result->fetch_assoc()){ ?>
      <div class="row">
            <a href="viewform.php?form_id=<?php echo"$form_id";?>" class="form-link">
                <div class="row-text">
                <p class="form-title"><?php echo $row['title']; ?></p>
                <p class="form-author right">Date: <?php echo $row['date']; ?></p>
                <p class="form-author">Entry no: <?php echo $row['form_id']; ?></p>
                </div>
            </a>
      </div> 
      <?php }?>     
    </div>

    <div class="container">
      <p class="secondary">Travel</p>
    </div>

    <div class="container">
    <p class="secondary">Fitness</p>
    </div>

    <div class="container">
    <p class="secondary">Creative</p>
    </div>

    <div class="container">
    <p class="secondary">Nature</p>
    </div>

  </main>

  <footer>

  </footer>  

  <div id="nav-container"></div>
 
</body>
</html>