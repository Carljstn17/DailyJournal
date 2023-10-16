<?php

include("function.php");
include_once("connection.php");

if(isset($_POST['form_id'])) {
    $form_id = $_POST['form_id'];
    $title = $_POST['title'];    
    $date = $_POST['date'];    
    $category = $_POST['category'];     
    $content = $_POST['content']; 

    $stmt = mysqli_prepare($conn, "UPDATE form SET title=?, date=?, category=?, content=? WHERE form_id=?");

    mysqli_stmt_bind_param($stmt, 'ssssi', $title, $date, $category, $content, $form_id);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    if($stmt) {
        mysqli_close($conn); // Close connection
        header("location: ../view/list-page.php"); // Redirect to all records page
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "form_id is not set in the POST request.";
}

?>
