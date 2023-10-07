<?php
session_start();

  include("connection.php");
  include("function.php");
  
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {
        //save to database
        $user_id = random_num(6);
        $query = "INSERT INTO user_info (user_id,user_name,password) values('$user_id','$user_name','$password')";
        
        mysqli_query($conn, $query);

        header("Location: ../view/login-page.php");
        die;
      }
      else
      {
        echo "Please enter some valid information!";
      }
    } 
?>