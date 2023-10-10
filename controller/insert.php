<?php
session_start();
include_once("connection.php");
include("function.php");

// Check if the form was submitted with a POST request
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Sanitize and escape user inputs
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $user_id = mysqli_real_escape_string($conn, $_SESSION["user_id"]);

    // Debugging: Print out received data
    echo "title: $title<br>";
    echo "date: $date<br>";
    echo "category: $category<br>";
    echo "content: $content<br>";
    echo "user_id: $user_id<br>";

    // Construct the SQL query
    $query = "INSERT INTO form(title, date, category, content, user_id) VALUES('$title', '$date', '$category', '$content', '$user_id')";

    // Perform the query
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);

    // Redirect to the desired location
    header("location: ../view/list.php");
    exit(); // Add exit() to ensure no further code is executed after the redirection
} else {
    echo "Invalid request method";
}
?>
