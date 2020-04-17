<?php  header('Location: /home.html');
$name = $_POST["name"];
$to = "shardul.negi21@gmail.com";
$subject = "[MyWebsite]" . $_POST["subject"];
$txt = $_POST["body"];
$headers = "From: personalwebsite" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
