// Add the following code to the controller/update-image.php file

<?php

// Get the base64 string from the POST request

$imageBase64 = $_POST['image'];

// Decode the base64 string and save it to a file

$image = base64_decode($imageBase64);
$fileName = uniqid() . '.jpg';
file_put_contents('../media/' . $fileName, $image);

// Update the image src attribute of the image tag and return it to the JavaScript file

echo '../media/' . $fileName;

?>
