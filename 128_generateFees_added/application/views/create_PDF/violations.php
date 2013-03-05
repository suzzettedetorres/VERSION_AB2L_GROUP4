<html>

<head>
	<title> Common Violations </title>
	<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
</head>

<body>

	<h1>List of Common Violations</h1>
	
		<?php
			$vio1 = 0;
			$vio2 = 0;
			$vio3 = 0;
			$vio4 = 0;
			$vio5 = 0;
			$vio6 = 0;
			$vio7 = 0;
			
			foreach($data as $d){
				if($d['VIOLATION'] == 'Failure To Pay Dormitory Fees on Time') $vio1++;
				else if($d['VIOLATION'] == 'Damage on Dormitory Properties') $vio2++;
				else if($d['VIOLATION'] == 'Late Attendance') $vio3++;
				else if($d['VIOLATION'] == 'Excessive Absences Without Permit or Notification') $vio4++;
				else if($d['VIOLATION'] == 'Misconduct and/or Misbehavior') $vio5++;
				else if($d['VIOLATION'] == 'Usage of Unauthorized Appliances') $vio6++;
				else $vio7++;
			}
			if($vio1>0)
			echo $vio1, ' \'Failure To Pay Dormitory Fees on Time\' ','<br/>';
			
			if($vio2>0)
			echo $vio2, ' \'Damage on Dormitory Properties\' ','<br/>';
			
			if($vio3>0)
			echo $vio3, ' \'Late Attendance\' ','<br/>';
			
			if($vio4>0)
			echo $vio4, ' \'Excessive Absences Without Permit or Notification\' ','<br/>';
			
			if($vio5>0)
			echo $vio5, ' \'Misconduct and/or Misbehavior\' ','<br/>';
			
			if($vio6>0)
			echo $vio6, ' \'Usage of Unauthorized Appliances\' ','<br/>';
			
			if($vio7>0)
			echo $vio7, ' \'Other Violations\' ','<br/>';
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			
			var violationid = " ";
			var violationdate = " ";
			var remark = " ";
			var vio1 = <?php echo $vio1; ?>;
			var vio2 = <?php echo $vio2; ?>;
			var vio3 = <?php echo $vio3; ?>;
			var vio4 = <?php echo $vio4; ?>;
			var vio5 = <?php echo $vio5; ?>;
			var vio6 = <?php echo $vio6; ?>;
			var vio7 = <?php echo $vio7; ?>;
			
			var i=0;
			var y=70;
			var x=24;
			var v=" ";
			
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(78, 40, "List of Common Violations");
			
			if(vio1>0){
			y=60;
			doc.setFontSize(11);
			doc.text(20, y, "Failure To Pay Dormitory Fees on Time");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Failure To Pay Dormitory Fees on Time')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio2>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Damage on Dormitory Properties");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Damage on Dormitory Properties')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio3>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Late Attendance");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Late Attendance')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio4>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Excessive Absences Without Permit or Notification");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Excessive Absences Without Permit or Notification')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio5>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Misconduct and/or Misbehavior");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Misconduct and/or Misbehavior')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio6>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Usage of Unauthorized Appliances");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Usage of Unauthorized Appliances')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(vio7>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Other Violations");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['VIOLATION']?>";
				if( v == 'Other Violations')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, violationdate);
					y=y+10;
					doc.text(30, y, violationid+" : "+remark);
					
				}
				
				
				
			<?php } ?>
			}
			
			/*if(vio2>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Damage on Dormitory Properties");
			<?php foreach($data as $d){?>
				if($d['VIOLATION'] == 'Damage on Dormitory Properties')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			
			if(vio3>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Late Attendance");
			<?php foreach($data as $d){?>
				if(<?php $d['VIOLATION'] ?> == 'Late Attendance')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			
			if(vio4>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Excessive Absences Without Permit or Notification");
			<?php foreach($data as $d){?>
				if($d['VIOLATION'] == 'Excessive Absences Without Permit or Notification')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			
			
			if(vio5>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Misconduct and/or Misbehavior");
			<?php foreach($data as $d){?>
				if(<?php $d['VIOLATION'] ?> == 'Misconduct and/or Misbehavior')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			
			
			if(vio6>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Usage of Unauthorized Appliances");
			<?php foreach($data as $d){?>
				if(<?php $d['VIOLATION'] ?> == 'Usage of Unauthorized Appliances')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			
			if(vio7>0){
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(75, 20, "List of Common Violations");
			doc.setFontSize(11);
			doc.text(95, 30, "Other Violations");
			<?php foreach(data as $d){?>
				if(<?php $d['VIOLATION'] ?> == 'Other Violations')
				{
					violationid = "<?php echo $d['VIOLATIONID'];?>";
					violationdate = "<?php echo $d['DATEOFVIOLATION'];?>";
					remark = "<?php echo $d['REMARK'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=30;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
				}
				
				
			<?php } ?>
			}
			*/
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html>