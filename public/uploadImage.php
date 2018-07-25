<?php
$baseFromJavascript = $_POST['base64'];
$name = $_POST['name'];
// remove the part that we don't need from the provided image and decode it
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseFromJavascript));

$filepath = "img/image.jpg"; // or image.jpg

// Save the image in a defined path
file_put_contents($filepath,$data);
?>
