<?php
//session_start();
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

$subject="Narrative Report of Dormer X" ;
//$to=$_POST['to'] ;
$to = $data;
echo $to;
$body="[sample report]<br />
Dormer X: basic dormer info, statement of account, violation/s *if there are* and some analysis report";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: graycelsantos@gmail.com" . "\r\n";
//mail($to,$subject,$body,$headers);
if (mail($to,$subject,$body,$headers))
	echo "yes";
else
	echo "no";
	//header("Location: sendEmail.php?ERR=1");
	
}
?>