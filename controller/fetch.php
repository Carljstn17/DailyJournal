<?php
include("connection.php");

if(isset($_POST['request'])){

  $request = $_POST['request'];

  $query = "SELECT * FROM form WHERE category = '$request'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
?>

  <div class="container">
    <?php
    
    if($count){

    ?>

    <?php  
    }else{
      echo "No Record Found";
    }

    ?>
  </div>

  <div class="row">
      <?php
      
      while($row = mysqli_fetch_assoc($result)){
      ?>
        <div class="row">
            <a href="viewform.php?form_id=<?php echo $row['form_id'];?>" class="form-link">
                <div class="row-text">
                <p class="form-title">Title: <?php echo $row['title']; ?></p>
                <p class="form-author">Date: <?php echo $row['date']; ?></p>
                </div>
            </a>
        </div>
      
      <?php
      }
      ?>
  </div>

<?php
}
?>