<!DOCTYPE html>
<html>
<head>
<title>Common Violations</title>
<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
	<script type="text/javascript" src="../../jschart/sources/jscharts.js"></script>
<link href="../../style.1.2.1.css" media="screen" rel="stylesheet" type="text/css" />
<link href="../../subPages.css" media="screen" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="../../../themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../../themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../../themes/dark/dark.css" type="text/css" media="screen" />
   	<link rel="stylesheet" href="../../../themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../nivo-slider.css" type="text/css" media="screen" />
   
   
	
<!--Clock code-->
    <script type="text/javascript">
	function startTime()
	{
		var today=new Date();
		var hh=today.getHours();
		var m=today.getMinutes();
		var months = ['Jan.','Feb.','Mar.','Apr.','May','Jun.','Jul.','Aug.','Sep.','Oct.','Nov.','Dec.'];
		var weekday = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];  
		// add a zero in front of numbers<10
		m=checkTime(m);
		 var h = hh;
    if (h >= 12) {
        h = hh-12;
        dd = "PM";
    }
    if (h == 0) {
        h = 12;
    }
		today.setTime(today.getTime()); 
		  document.getElementById('clock').innerHTML=h+":"+m+"<br /><br />"+weekday[today.getDay()]+"<br /><br />"+today.getDate()+" "+months[today.getMonth()];
		t=setTimeout(function(){startTime()},500);
	}
	
	function checkTime(i)
	{
	if (i<10)
	  {
	  i="0" + i;
	  }
	return i;
	}
    </script>
	
</head>

<body onload="startTime()">	
	<div id="naviSub">
    	<div id="half1">
            <div class="tile bg-color-red" id="logOut">
                <a href="goToLogin"><img src="../../img/invisible-LINK.png" /></a>
            </div>
            <div class="tile bg-color-green" id="home">
                <a href="goToMain"><img src="../../img/invisible-LINK.png" /></a>
            </div>
        </div>
    	<div class="tile double-vertical bg-color-red" id="clocktile">
            <div id="clock"></div>
        </div>
        <div class="tile double bg-color-blue" id="slide">
           <div id="slide">
        	 <div id="wrapper">        
                <div class="slider-wrapper theme-default">
                      <div id="slider" class="nivoSlider">
                                <img src="../../images/women.jpg" data-thumb="../../images/women.jpg" alt="" title="#htmlcaption1"/>
                             	<img src="../../images/women1.jpg" data-thumb="../../images/women1.jpg" alt="" title="#htmlcaption2" />
                                <img src="../../images/women2.jpg" data-thumb="../../images/women2.jpg" alt="" title="#htmlcaption3" />
                                <img src="../../images/uplb.jpg" data-thumb="../../images/uplb.jpg" alt="" title="#htmlcaption4" />
                            </div>
                </div>
        
            </div>
           <script type="text/javascript" src="../../scripts/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="../../jquery.nivo.slider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        </div>
        </div>
        <div class="tile bg-color-greenDark" id="manageResident">
           	<a href="goToManageResident"><img src="../../img/invisible-LINK.png" /></a>
        </div>
        <div class="tile bg-color-greenLight" id="room">
            	<a href="goToManageDorm"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>

	<div id="content">
    	<header>
            <h1>List of Common Violations</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
	<br/>
	
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
			/*if($vio1>0)
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
			echo $vio7, ' \'Other Violations\' ','<br/>';*/
		?>
		<form name="form1" action = "javascript:exportToPDF()">
						<br/>
					<input type="submit" value="EXPORT">
	</form>
	<div id="chartid">
		<script type="text/javascript">
			var vio1 = <?php echo $vio1; ?>;
			var vio2 = <?php echo $vio2; ?>;
			var vio3 = <?php echo $vio3; ?>;
			var vio4 = <?php echo $vio4; ?>;
			var vio5 = <?php echo $vio5; ?>;
			var vio6 = <?php echo $vio6; ?>;
			var vio7 = <?php echo $vio7; ?>;
			var myData = new Array(["Failure To Pay Dormitory Fees on Time", vio1], ["Damage on Dormitory Properties", vio2], ["Late Attendance", vio3], ["Excessive Absences Without Permit or Notification", vio4], ["Misconduct and/or Misbehavior", vio5], ["Usage of Unauthorized Appliances", vio6],["Other Violations",vio7]);
			var colors = ['#FACC00', '#FB9900', '#FB6600', '#FB4800', '#CB0A0A', '#F8F933'];
			var myChart = new JSChart('chartid', 'pie');
			myChart.setSize(700, 300);
			myChart.setTitle("Dormers' Violation");
			myChart.setTitleFontFamily('Times New Roman');
			myChart.setTitleFontSize(14);
			myChart.setDataArray(myData);
			myChart.colorize(['#99CDFB','#3366FB','#0000FA','#F8CC00','#F89900','#F76600','#CB0A0A']);
			myChart.setTitleColor('#857D7D');
			myChart.setPieUnitsColor('#9B9B9B');
			myChart.setPieValuesColor('#6A0000');
			myChart.setPiePosition(140, 165);
			myChart.setShowXValues(false);
			myChart.setLegend('#99CDFB', 'Failure To Pay Dormitory Fees on Time');
			myChart.setLegend('#3366FB', 'Damage on Dormitory Properties');
			myChart.setLegend('#0000FA', 'Late Attendance');
			myChart.setLegend('#F8CC00', 'Excessive Absences Without Permit or Notification');
			myChart.setLegend('#F89900', 'Misconduct and/or Misbehavior');
			myChart.setLegend('#F76600', 'Usage of Unauthorized Appliances');
			myChart.setLegend('#CB0A0A', 'Other Violations');
			myChart.setLegendShow(true);
			myChart.setLegendPosition(350, 120);
			myChart.setPieAngle(30);
			myChart.set3D(true);
			myChart.draw();
		</script>
		</div>
	
	<br />
</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>
	
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