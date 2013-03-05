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
			
			$gdcount=0;
			foreach($data as $d){
				$gdcount++;
			}
			if($gdcount>1)
				echo $gdcount, ' Graduating Dormers','<br/>';
			else if($gdcount==1) echo $gdcount, ' Graduating Dormer','<br/>';
			else echo 'No Graduating Dormer','<br/>';
			
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			var gdcount = "<?php echo $gdcount;?>";
			
			var fname=" ";
			var mname=" ";
			var lname=" ";
			var name=" ";
			var i=0;
			var y=30;
			var x=24;
			var studnum = " ";
			if(gdcount>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(95, 30, "List of Graduating Dormers");
			<?php foreach($data as $d){?>
				fname = "<?php echo $d['FIRSTNAME'];?>";
			   mname = "<?php echo $d['MIDDLENAME'];?>";
			   lname = "<?php echo $d['LASTNAME'];?>";
				studnum = "<?php echo $d['STUDENTNUMBER'];?>";
				name = fname+ " " + mname+ " "+lname;
				i++;
				y=y+10;
				if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
				}
				doc.text(20, y, i.toString()+".");
				doc.text(27, y, studnum+"     " + name);
				
				
			<?php } ?>
			}
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html>