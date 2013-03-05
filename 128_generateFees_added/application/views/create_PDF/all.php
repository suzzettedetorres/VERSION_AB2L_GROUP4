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
			$socount=0;
			foreach($so as $d){
				$socount++;
			}
			if($socount>1)
			echo $socount, ' Sophomores','<br/>';
			else if($socount==1) echo $socount, ' Sophomore','<br/>';
			else echo 'No Sophomore','<br/>';
			
			$jrcount=0;
			foreach($jr as $d){
				$jrcount++;
			}
			if($jrcount>1)
			echo $jrcount, ' Juniors','<br/>';
			else if($jrcount==1) echo $jrcount, ' Junior','<br/>';
			else echo 'No Junior','<br/>';
			
			$srcount=0;
			foreach($sr as $d){
				$srcount++;
			}
			if($srcount>1)
			echo $srcount, ' Seniors','<br/>';
			else if($srcount==1) echo $srcount, ' Senior','<br/>';
			else echo 'No Senior','<br/>';
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			var socount = "<?php echo $socount;?>";
			var jrcount = "<?php echo $jrcount;?>";
			var srcount = "<?php echo $srcount;?>";
			
			
			var fname=" ";
			var mname=" ";
			var lname=" ";
			var name=" ";
			var i=0;
			var y=30;
			var x=24;
			var studnum = " ";
			if(socount>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(95, 30, "List of Sophomores");
			//for(var i=0; i< count; i++){
			<?php foreach($so as $d){?>
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
			if(jrcount>0){
			i=0;
			doc.setFontSize(11);
			y=y+20;
			doc.text(95, y, "List of Juniors");
			fname=" ";
			mname=" ";
			lname=" ";
			name=" ";
			
			<?php foreach($jr as $d){?>
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
			if(srcount>0){
			i=0;
			y=y+20;
			doc.setFontSize(11);
			doc.text(95, y, "List of Seniors");
			<?php foreach($sr as $d){?>
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