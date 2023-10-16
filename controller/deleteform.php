<?php

include("function.php");
include("connection.php");

$form_id = $_GET['form_id'];

// sql to delete a record
$sql = "DELETE FROM form Where form_id = '$form_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location: ../view/list-page.php");
} else {
  echo "Error deleting record: " . $conn->error;

}
?>