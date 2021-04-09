<?php

$to = "udruzenjestandup@gmail.com";
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$subject = "Email sa webstranice od " . $from;
$message = $_POST['message'];

$headers = "From:" . $from;

if (mail($to,$subject,$message,$headers)) {
    echo "OK";
}
echo "Došlo je do greške!";

?>
