<?php
session_start();


  include("function.php");
  include("connection.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {
        //read from database
        $query = "select * from user_info where user_name = '$user_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
          {  
              $user_data = mysqli_fetch_assoc($result);
              
              if($user_data['password'] === $password)
              {

                $_SESSION['user_name'] = $user_data['user_name'];
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: ../view/profile.php");
                die;
              }
          }
        }echo "wrong username or password!";
      }
      else
      {
        echo "wrong username or password!";
      }
    } 
?>
