<!DOCTYPE html>
<html>
<head>
<title>Send Report</title>
</head>
<body>
<?php
//session_start();


$subject="Narrative Report of Dormer X" ;
//$to=$_POST['to'] ;
$to = $data;
//echo $to;
$body="[sample report]<br />
Dormer X: basic dormer info, statement of account, violation/s *if there are* and some analysis report";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: graycelsantos@gmail.com" . "\r\n";
//mail($to,$subject,$body,$headers);
if (mail($to,$subject,$body,$headers)){
	echo "<script type='text/javascript'>alert('Sent.')</script>";
	$this->load->view("Main.php");
}
else{
	echo "<script type='text/javascript'>alert('Send Failed.')</script>";
	$this->load->view("Main.php");
}
?>
</body>