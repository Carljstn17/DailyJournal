<?php
session_start();
include_once("connection.php");
include("function.php");

// Check if the form was submitted with a POST request
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_id = $_SESSION['user_id'];
    // Sanitize and escape user inputs
    $descr = mysqli_real_escape_string($conn, $_POST["descr"]);
  
    // Debugging: Print out received data
    echo "descr: $descr<br>";

    // Construct the SQL query for updating the description
    $query = "UPDATE user_info SET descr = '$descr' WHERE user_id = '$user_id'";

    // Perform the query
    if (mysqli_query($conn, $query)) {
        echo "Description updated successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);

    // Redirect to the desired location
    header("location: ../view/profile.php");
    exit(); // Add exit() to ensure no further code is executed after the redirection
} else {
    echo "Invalid request method";
}
?>
