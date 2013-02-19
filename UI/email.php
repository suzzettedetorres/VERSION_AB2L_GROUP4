
<?php
session_start();

$subject="Narrative Report of Dormer X" ;
$to=$_POST['to'] ;
$body="[sample report]<br />
Dormer X: basic dormer info, statement of account, violation/s *if there are* and some analysis report";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: graycelsantos@gmail.com" . "\r\n";

if (mail($to,$subject,$body,$headers))
	header("Location: mailTry.php?SUC=1");
else
	header("Location: mailTry.php?ERR=1");
?>