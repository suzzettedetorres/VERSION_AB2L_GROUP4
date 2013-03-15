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
            <h1>Classification</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
	<br/>
	
		<?php
			$socount=0;
			foreach($so as $d){
				$socount++;
			}
			/*if($socount>1)
			echo $socount, ' Sophomores','<br/>';
			else if($socount==1) echo $socount, ' Sophomore','<br/>';
			else echo 'No Sophomore','<br/>';
			*/
			$jrcount=0;
			foreach($jr as $d){
				$jrcount++;
			}
			/*if($jrcount>1)
			echo $jrcount, ' Juniors','<br/>';
			else if($jrcount==1) echo $jrcount, ' Junior','<br/>';
			else echo 'No Junior','<br/>';
			*/
			$srcount=0;
			foreach($sr as $d){
				$srcount++;
			}
			/*if($srcount>1)
			echo $srcount, ' Seniors','<br/>';
			else if($srcount==1) echo $srcount, ' Senior','<br/>';
			else echo 'No Senior','<br/>';*/
		?>
		<br/>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<div id="chartid">
		<script type="text/javascript">
			var socount = <?php echo $socount;?>;
			var jrcount = <?php echo $jrcount;?>;
			var srcount = <?php echo $srcount;?>;
			var myData = new Array(["Sophomore", socount], ["Junior", jrcount], ["Senior", srcount]);
			var colors = ['#FACC00', '#FB9900', '#FB6600'];
			var myChart = new JSChart('chartid', 'pie');
			myChart.setSize(500, 300);
			myChart.setTitle("Dormers' Classification");
			myChart.setTitleFontFamily('Times New Roman');
			myChart.setTitleFontSize(14);
			myChart.setDataArray(myData);
			myChart.colorize(['#99CDFB','#3366FB','#0000FA']);
			myChart.setTitleColor('#857D7D');
			myChart.setPieUnitsColor('#9B9B9B');
			myChart.setPieValuesColor('#6A0000');
			myChart.setPiePosition(180, 165);
			myChart.setShowXValues(false);
			myChart.setLegend('#99CDFB', 'Sophomore');
			myChart.setLegend('#3366FB', 'Junior');
			myChart.setLegend('#0000FA', 'Senior');
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