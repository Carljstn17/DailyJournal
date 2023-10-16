<?php

include("function.php");
include_once("connection.php");

	$form_id = $_POST['form_id'];	
	$title = $_POST['title'];	
	$date = $_POST['date'];	
	$category = $_POST['category'];	 
    $content = $_POST['content'];	 

	echo $title;	
	echo $date;	
	echo $category;	 
    echo $content;	  
 
	?>	