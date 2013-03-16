<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
<html>

<head>
	<title> Accumulated Fees </title>
	<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
</head>

<body>

	<h1>List of Accumulated Fees</h1>
	
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			
			var stnum = " ";
			var fname = " ";
			var mname = " ";
			var lname = " ";
			var monthaccount = " ";
			var dateofpayment = " ";
			var total = 0;
			
			var i=0;
			var y=70;
			var x=24;
			var v=" ";
			
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(78, 40, "List of Accumulated Fees");
			
			<?php foreach($data as $d){
				echo 'total = total + '.$d['MONTHACCOUNT'].';';
				foreach($dormerpr as $p){
					if($p['PAYMENTRECORDID'] == $d['PAYMENTRECORDID']){
						foreach($dormerinfo as $i){
							if($i['STUDENTNUMBER'] == $p['STUDENTNUMBER']){
								echo 'stnum ="'.$i['STUDENTNUMBER'].'";';
								echo 'fname ="'.$i['FIRSTNAME'].'";';
								echo 'mname ="'.$i['MIDDLENAME'].'";';
								echo 'lname ="'.$i['LASTNAME'].'";';
							}
						}
						break;
					}
				}
			?>
				monthaccount = "<?php echo $d['MONTHACCOUNT'];?>";
				dateofpayment = "<?php echo $d['DATEOFPAYMENT'];?>";
				
					i++;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, stnum+" "+lname+" "+fname+" "+mname);
					y=y+10;
					doc.text(20, y, "Dormitory Fee Paid : "+monthaccount);
					y=y+10;
					doc.text(20, y, "Date of Payment : "+dateofpayment);
					y=y+20;
			<?php } ?>
			
			doc.text(20, y+10, "TOTAL ACCUMULATED FEE : P "+total);
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html><?php } ?> 
