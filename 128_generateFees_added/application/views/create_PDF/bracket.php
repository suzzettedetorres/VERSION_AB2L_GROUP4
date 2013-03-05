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
			$acount=0;
			foreach($a as $d){
				$acount++;
			}
			if($acount>1)
			echo $acount, ' Bracket A','<br/>';
			else if($acount==1) echo $acount, ' Bracket A','<br/>';
			else echo 'No Bracket A';
			
			$bcount=0;
			foreach($b as $d){
				$bcount++;
			}
			if($bcount>1)
			echo $bcount, ' Bracket B','<br/>';
			else if($bcount==1) echo $bcount, ' Bracket B','<br/>';
			else echo 'No Bracket B','<br/>';
			
			$ccount=0;
			foreach($c as $d){
				$ccount++;
			}
			if($ccount>1)
			echo $ccount, ' Bracket C','<br/>';
			else if($ccount==1) echo $ccount, ' Bracket C','<br/>';
			else echo 'No Bracket C','<br/>';
			
			$decount=0;
			foreach($de as $d){
				$decount++;
			}
			if($decount>1)
			echo $decount, ' Bracket D','<br/>';
			else if($decount==1) echo $decount, ' Bracket D','<br/>';
			else echo 'No Bracket D','<br/>';
			
			$e1count=0;
			foreach($e1 as $d){
				$e1count++;
			}
			if($e1count>1)
			echo $e1count, ' Bracket E1','<br/>';
			else if($e1count==1) echo $e1count, ' Bracket E1','<br/>';
			else echo 'No Bracket E1','<br/>';
			
			$e2count=0;
			foreach($e2 as $d){
				$e2count++;
			}
			if($e2count>1)
			echo $e2count, ' Bracket E2','<br/>';
			else if($e2count==1) echo $e2count, ' Bracket E2','<br/>';
			else echo 'No Bracket E2','<br/>';
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			var acount = "<?php echo $acount;?>";
			var bcount = "<?php echo $bcount;?>";
			var ccount = "<?php echo $ccount;?>";
			var decount = "<?php echo $decount;?>";
			var e1count = "<?php echo $e1count;?>";
			var e2count = "<?php echo $e2count;?>";
			
			
			var fname=" ";
			var mname=" ";
			var lname=" ";
			var name=" ";
			var i=0;
			var y=30;
			var x=24;
			var studnum = " ";
			if(acount>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(95, 30, "List of Bracket A");
			//for(var i=0; i< count; i++){
			<?php foreach($a as $d){?>
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
			if(bcount>0){
			i=0;
			doc.setFontSize(11);
			y=y+20;
			doc.text(95, y, "List of Bracket B");
			
			<?php foreach($b as $d){?>
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
			if(ccount>0){
			i=0;
			y=y+20;
			doc.setFontSize(11);
			doc.text(95, y, "List of Bracket C");
			<?php foreach($c as $d){?>
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
			
			if(decount>0){		
			i=0;
			y=y+20;
			doc.setFontSize(11);
			doc.text(95, y, "List of Bracket D");
			//for(var i=0; i< count; i++){
			<?php foreach($de as $d){?>
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
			if(e1count>0){
			i=0;
			doc.setFontSize(11);
			y=y+20;
			doc.text(95, y, "List of Bracket E1");
			
			<?php foreach($e1 as $d){?>
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
			if(e2count>0){
			i=0;
			y=y+20;
			doc.setFontSize(11);
			doc.text(95, y, "List of Bracket E2");
			<?php foreach($e2 as $d){?>
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