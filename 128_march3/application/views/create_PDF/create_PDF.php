<!DOCTYPE html>
<html>
<head>
<title>Create Narrative Report</title>
		<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
		<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
		<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
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
        <div class="tile bg-color-blue" id="genReport">
                	<a href="goToGenerateReport"><img src="../../img/invisible-LINK.png" /></a>
                </div>
          <div class="tile bg-color-greenLight" id="search">
           	<a href="#"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>
    <div id="content">
    	<header>
            <h1>Create Narrative Report</h1>
        </header>
        <section>
       <br />
	
<?php echo 'LOL';?>
		<table id ="forms">
				<form name="form1" action = "javascript:exportToPDF()">
					<tr>
						<td>Date &nbsp;</td>
						<td><input type = "text" id = "mydate" name = "mydate" required/></td>
					</tr>
					<tr>
					<td>
						<td>Name &nbsp;</td>
						<td><input type = "text" id = "myname" name = "myname" required/></td>
					</td>
					
					</tr>
					<tr>
					<td>
						<td>Residence Fee &nbsp;</td>
						<td><input type = "text" id = "residencefee" name = "residencefee" required/></td>
					</td>
					<td>
						<input type="date" name="resdate" required/>
					</td>
					<td>
						<input type="date" name="resdate2" required/>
					</td>
					</tr>
					<tr>
					<td>
						<td>Appliance Fee &nbsp;</td>
						<td><input type = "text" id = "afee" name = "afee" required/></td>
					</td>
					<td>
						<input type="date" name="adate" required/>
					</td>
					<td>
						<input type="date" name="adate2" required/>
					</td>
					</tr>
					<tr>
					<td>
						<td>Transient Fee &nbsp;</td>
						<td><input type = "text" id = "tfee" name = "tfee" required/></td>
					</td>
					<td>
						<input type="date" name="tdate" required/>
					</td>
					<td>
						<input type="date" name="tdate2" required/>
					</td>
					</tr>
					<tr>
					<td>
						<td>Reservation Fee &nbsp;</td>
						<td><input type = "text" id = "rfee" name = "rfee"/></td>
					</td>
					<td>
						<input type="date" name="rdate" required/>
					</td>
					<td>
						<input type="date" name="rdate2" required/>
					</td>
					</tr>
					<tr>
					<td>
						<td>Key Deposit &nbsp;</td>
						<td><input type = "text" id = "kdeposit" name = "kdeposit"/></td>
					</td>
					<td>
						<input type="date" name="kdate" required/>
					</td>
					<td>
						<input type="date" name="kdate2" required/>
					</td>
					</tr>
					<tr>
					<td>
						<td>Closed Locker &nbsp;</td>
						<td><input type = "text" id = "locker" name = "locker"/></td>
					</td>
					<td>
						<input type="date" name="ldate" required/>
					</td>
					<td>
						<input type="date" name="ldate2" required/>
					</td>
					</tr>
					<tr>
					<td><input type="submit" value="EXPORT"></td>
					</tr>
				</form>
				</table>
				<!--<input type="submit">
				<a href = "javascript:exportToPDF()"> EXPORT </button>-->


	<script type="text/javascript">
		function exportToPDF() {
			var date=document.form1.mydate.value;
			var fullname=document.form1.myname.value;
			var residence=(document.form1.residencefee.value);
			var afee=(document.form1.afee.value);
			var tfee=(document.form1.tfee.value);
			var rfee=(document.form1.rfee.value);
			var kdeposit=(document.form1.kdeposit.value);
			var locker=(document.form1.locker.value);
			var total = parseFloat(residence)+parseFloat(afee)+parseFloat(tfee)+parseFloat(rfee)+parseFloat(kdeposit)+parseFloat(locker);
			//document.write(total);
			
			var resdate=(document.form1.resdate.value);
			var adate=(document.form1.adate.value);
			var tdate=(document.form1.tdate.value);
			var rdate=(document.form1.rdate.value);
			var kdate=(document.form1.kdate.value);
			var ldate=(document.form1.ldate.value);
			var resdate2=(document.form1.resdate2.value);
			var adate2=(document.form1.adate2.value);
			var tdate2=(document.form1.tdate2.value);
			var rdate2=(document.form1.rdate2.value);
			var kdate2=(document.form1.kdate2.value);
			var ldate2=(document.form1.ldate2.value);
			
			var x = total.toString();
			var doc = new jsPDF();
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");
			doc.text(75, 30, 'Student Housing Division');
			doc.text(80, 40, 'UPLB Housing Office');
			doc.text(85, 50, 'College, Laguna');			
			doc.text(120, 70, '____________________');
			doc.text(130, 70, date);
			doc.text(145, 80, 'Date');
			doc.text(80, 90, 'Statement of Account');
			doc.text(40,100, fullname);
			doc.text(20, 100, 'Name: _______________________________________________');
			doc.text(85, 110, 'Period Covered                 Amount');
			doc.text(150, 120, 'P'+residence);
			doc.text(20, 120, 'Residence Fee:            ________________     ________________');
			doc.setFontSize(11);
			doc.text(80,120, resdate+' to '+resdate2);
			doc.setFontSize(16);
			doc.text(20, 130, '                                     ________________     ________________');
			doc.text(150, 140, 'P'+afee);
			doc.text(20, 140, 'Appliance Fee:             ________________     ________________');
			
			doc.setFontSize(11);
			doc.text(80,140, adate+' to '+adate2);
			doc.setFontSize(16);
			doc.text(20, 150, '                                     ________________     ________________');
			doc.text(20, 160, '                                     ________________     ________________');
			doc.text(20, 170, '                                     ________________     ________________');
			doc.text(20, 180, 'Transient Fee:              ________________     ________________');
			doc.text(150, 180, 'P'+tfee);
			doc.setFontSize(11);
			doc.text(80,180, tdate+' to '+tdate2);
			doc.setFontSize(16);
			doc.text(20, 190, 'Reservation Fee:          ________________     ________________');
			doc.text(150, 190, 'P'+rfee);
			doc.setFontSize(11);
			doc.text(80,190, rdate+' to '+rdate2);
			doc.setFontSize(16);
			doc.text(20, 200, 'Key Deposit:                 ________________     ________________');
			doc.text(150, 200, 'P'+kdeposit);
			doc.setFontSize(11);
			doc.text(80,200, kdate+' to '+kdate2);
			doc.setFontSize(16);
			doc.text(20, 210, 'Closed Locker:             ________________     ________________');
			doc.text(150, 210, 'P'+locker);
			doc.setFontSize(11);
			doc.text(80,210, ldate+' to '+ldate2);
			doc.setFontSize(16);
			doc.text(20, 230, 'Issued by: _________________    Total:_____________________');
			doc.text(125, 230, 'P'+x);
			doc.text(20, 240, 'OR #:_____________________    Date:_____________________');
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
<br />
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>

</body>

</html>




<!--References:

Retrived at 2 February, 2013 from
http://simoborto.altervista.org
https://uho.uplb.edu.ph/index.php
http://danielrichardeviant.deviantart.com/
http://dev7studios.com/
-->


<!DOCTYPE HTML>
<html>
	<head>
		<title>JS-PDF</title>
		<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
		<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
		<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
	</head>
	<body>
		

	</body>




</html>