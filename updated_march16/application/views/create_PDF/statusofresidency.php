<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
 <!DOCTYPE html>
<html>
<head>
<title>Generate PDF - Status of Residency</title>
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
            <h1>Report on Status of Residency of Dormers</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
	<br/>
	
		<?php
			$good = 0;
			$warning = 0;
			$probation = 0;
			$expelled = 0;
			
			foreach($data as $d){
				if($d['STATUSOFRESIDENCY'] == 'Good') $good++;
				else if($d['STATUSOFRESIDENCY'] == 'Warning') $warning++;
				else if($d['STATUSOFRESIDENCY'] == 'Probation') $probation++;
				else if($d['STATUSOFRESIDENCY'] == 'Expelled') $expelled++;
			}
		?>
		<form name="form1" action = "javascript:exportToPDF()">
						<br/>
					<input type="submit" value="Export as PDF File">
	</form>
	<div id="chartid">
		<script type="text/javascript">
			var good = <?php echo $good; ?>;
			var warning = <?php echo $warning; ?>;
			var probation = <?php echo $probation; ?>;
			var expelled = <?php echo $expelled; ?>;
			var myData = new Array(["Good", good], ["Warning", warning], ["Probation", probation], ["Expelled", expelled]);
			var colors = ['#FACC00', '#FB9900', '#FB6600', '#FB4800'];
			var myChart = new JSChart('chartid', 'pie');
			myChart.setSize(700, 300);
			myChart.setTitle("Dormers' Status of Residency");
			myChart.setTitleFontFamily('Times New Roman');
			myChart.setTitleFontSize(14);
			myChart.setDataArray(myData);
			myChart.colorize(['#99CDFB','#3366FB','#0000FA','#F8CC00']);
			myChart.setTitleColor('#857D7D');
			myChart.setPieUnitsColor('#9B9B9B');
			myChart.setPieValuesColor('#6A0000');
			myChart.setPiePosition(140, 165);
			myChart.setShowXValues(false);
			myChart.setLegend('#99CDFB', 'Good');
			myChart.setLegend('#3366FB', 'Warning');
			myChart.setLegend('#0000FA', 'Probation');
			myChart.setLegend('#F8CC00', 'Expelled');
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
			
			var good = <?php echo $good; ?>;
			var warning = <?php echo $warning; ?>;
			var probation = <?php echo $probation; ?>;
			var expelled = <?php echo $expelled; ?>;
			
			var i=0;
			var y=70;
			var x=24;
			var v=" ";
			
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.setFontSize(13);
			doc.text(58, 40, "List of Dormer's in their Status of Residency");
			
			if(good>0){
			y=60;
			doc.setFontSize(11);
			doc.text(20, y, "Good");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['STATUSOFRESIDENCY']?>";
				if( v == 'Good')
				{
					stnum = "<?php echo $d['STUDENTNUMBER'];?>";
					fname = "<?php echo $d['FIRSTNAME'];?>";
					mname = "<?php echo $d['MIDDLENAME'];?>";
					lname = "<?php echo $d['LASTNAME'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, stnum+" "+lname+", "+fname+" "+mname);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(warning>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Warning");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['STATUSOFRESIDENCY']?>";
				if( v == 'Warning')
				{
					stnum = "<?php echo $d['STUDENTNUMBER'];?>";
					fname = "<?php echo $d['FIRSTNAME'];?>";
					mname = "<?php echo $d['MIDDLENAME'];?>";
					lname = "<?php echo $d['LASTNAME'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, stnum+" "+lname+", "+fname+" "+mname);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(probation>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Probation");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['STATUSOFRESIDENCY']?>";
				if( v == 'Probation')
				{
					stnum = "<?php echo $d['STUDENTNUMBER'];?>";
					fname = "<?php echo $d['FIRSTNAME'];?>";
					mname = "<?php echo $d['MIDDLENAME'];?>";
					lname = "<?php echo $d['LASTNAME'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, stnum+" "+lname+", "+fname+" "+mname);
					
				}
				
				
				
			<?php } ?>
			}
			
			if(expelled>0){
			y=y+20;
			doc.setFontSize(11);
			doc.text(20, y, "Expelled");
			<?php foreach($data as $d){?>
				v = "<?php echo $d['STATUSOFRESIDENCY']?>";
				if( v == 'Expelled')
				{
					stnum = "<?php echo $d['STUDENTNUMBER'];?>";
					fname = "<?php echo $d['FIRSTNAME'];?>";
					mname = "<?php echo $d['MIDDLENAME'];?>";
					lname = "<?php echo $d['LASTNAME'];?>";
					i++;
					y=y+10;
					if(y>=280){
					doc.addPage();
					y=70;
					doc.setFontSize(16);
					doc.text(75, 20, "Women's Residence Hall");		
					doc.setFontSize(11);
					}
					
					doc.text(20, y, stnum+" "+lname+", "+fname+" "+mname);
					
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

<?php } ?>