<?php
$to = "nsjm.cs@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: ahmad.bastian8@gmail.com";

mail($to,$subject,$txt,$headers);
?>
