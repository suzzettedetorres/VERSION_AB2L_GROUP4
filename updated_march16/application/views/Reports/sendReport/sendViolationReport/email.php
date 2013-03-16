<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
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
$to = 'suzzettedetorres@gmail.com';
//echo $to;
$body="[sample report]<br />
Dormer X: basic dormer info, statement of account, violation/s *if there are* and some analysis report";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: graycelsantos@gmail.com" . "\r\n";
//mail($to,$subject,$body,$headers);
if (mail($to,$subject,$body,$headers)){
	echo '<center><div class="desc2 bg-color-blue"><div class="fg-color-white" id="title">Message sent.</div></div></center>';
	$this->load->view("Main.php");
}
else{
	echo '<center><div class="desc2 bg-color-red"><div class="fg-color-white" id="title">Message sending failed.</div></div></center>';
	$this->load->view("Main.php");
}
?>
</body><?php } ?> 