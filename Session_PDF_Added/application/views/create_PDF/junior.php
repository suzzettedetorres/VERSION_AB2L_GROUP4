<html>

<head>
	<title> DORMER </title>
	<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
</head>

<body>

	<h1>DORMERS</h1>
	
		<?php
			$count=0;
			foreach($data as $d){
				$count++;
			}
			
			if($count>1)
			echo $count, ' Juniors','<br/>';
			else if($count==1) echo $count, ' Junior','<br/>';
			else echo 'No Junior';
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(95, 30, "List of Juniors");
			var fname=" ";
			var mname=" ";
			var lname=" ";
			var name=" ";
			var i=0;
			var y=30;
			var x=24;
			//for(var i=0; i< count; i++){
			<?php foreach($data as $d){?>
				fname = "<?php echo $d['FIRSTNAME'];?>";
			   mname = "<?php echo $d['MIDDLENAME'];?>";
			   lname = "<?php echo $d['LASTNAME'];?>";
				studnum = "<?php echo $d['STUDENTNUMBER'];?>";
				name = fname+ " " + mname+ " "+lname;
				i++;
				y=y+10;
				doc.text(20, y, i.toString()+".");
				doc.text(24, y, studnum+"  " + name);
				
				if(i==50) doc.addPage();
			<?php } ?>
			
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html>