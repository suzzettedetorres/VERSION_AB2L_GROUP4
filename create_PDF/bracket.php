<html>

<head>
	<title> DORMER </title>
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
            <h1>Brackets</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
	<br/>
		<?php
			$acount=0;
			foreach($a as $d){
				$acount++;
			}
			/*if($acount>1)
			echo $acount, ' Bracket A','<br/>';
			else if($acount==1) echo $acount, ' Bracket A','<br/>';
			else echo 'No Bracket A';
			*/
			$bcount=0;
			foreach($b as $d){
				$bcount++;
			}
			/*if($bcount>1)
			echo $bcount, ' Bracket B','<br/>';
			else if($bcount==1) echo $bcount, ' Bracket B','<br/>';
			else echo 'No Bracket B','<br/>';
			*/
			$ccount=0;
			foreach($c as $d){
				$ccount++;
			}
			/*if($ccount>1)
			echo $ccount, ' Bracket C','<br/>';
			else if($ccount==1) echo $ccount, ' Bracket C','<br/>';
			else echo 'No Bracket C','<br/>';
			*/
			$decount=0;
			foreach($de as $d){
				$decount++;
			}
			/*if($decount>1)
			echo $decount, ' Bracket D','<br/>';
			else if($decount==1) echo $decount, ' Bracket D','<br/>';
			else echo 'No Bracket D','<br/>';
			*/
			$e1count=0;
			foreach($e1 as $d){
				$e1count++;
			}
			/*if($e1count>1)
			echo $e1count, ' Bracket E1','<br/>';
			else if($e1count==1) echo $e1count, ' Bracket E1','<br/>';
			else echo 'No Bracket E1','<br/>';
			*/
			$e2count=0;
			foreach($e2 as $d){
				$e2count++;
			}
			/*if($e2count>1)
			echo $e2count, ' Bracket E2','<br/>';
			else if($e2count==1) echo $e2count, ' Bracket E2','<br/>';
			else echo 'No Bracket E2','<br/>';*/
		?>
		<form name="form1" action = "javascript:exportToPDF()">
					<br/>
					<input type="submit" value="EXPORT">
		</form>
		<div id="chartid">
		<script type="text/javascript">
			var acount = <?php echo $acount;?>;
			var bcount = <?php echo $bcount;?>;
			var ccount = <?php echo $ccount;?>;
			var decount = <?php echo $decount;?>;
			var e1count = <?php echo $e1count;?>;
			var e2count = <?php echo $e2count;?>;
			var myData = new Array(["Bracket A", acount], ["Bracket B", bcount], ["Bracket C", ccount], ["Bracket D", decount], ["Bracket E1", e1count], ["Bracket E2", e2count]);
			var colors = ['#FACC00', '#FB9900', '#FB6600', '#FB4800', '#CB0A0A', '#F8F933'];
			var myChart = new JSChart('chartid', 'pie');
			myChart.setSize(500, 300);
			myChart.setTitle("Dormers' STFAP Bracket");
			myChart.setTitleFontFamily('Times New Roman');
			myChart.setTitleFontSize(14);
			myChart.setDataArray(myData);
			myChart.colorize(['#99CDFB','#3366FB','#0000FA','#F8CC00','#F89900','#F76600']);
			myChart.setTitleColor('#857D7D');
			myChart.setPieUnitsColor('#9B9B9B');
			myChart.setPieValuesColor('#6A0000');
			myChart.setPiePosition(180, 165);
			myChart.setShowXValues(false);
			myChart.setLegend('#99CDFB', 'Bracket A');
			myChart.setLegend('#3366FB', 'Bracket B');
			myChart.setLegend('#0000FA', 'Bracket C');
			myChart.setLegend('#F8CC00', 'Bracket D');
			myChart.setLegend('#F89900', 'Bracket E1');
			myChart.setLegend('#F76600', 'Bracket E2');
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
			
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			if(acount>0){
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