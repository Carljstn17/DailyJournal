<?php

include("function.php");
include_once("connection.php");

	$form_id = $_POST['form_id'];	
	$Genre = $_POST['Genre'];	
	

    echo $form_id;	
	echo $Genre;	
	echo $Artist;	
	echo $List;	 
 

 $edit = mysqli_query($conn, "UPDATE user_profile set Genre='$Genre', Artist='$Artist', List='$List' where form_id='$form_id'");

  if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:edit-profile.php"); // redirects to all records page
    } 	

	?>	