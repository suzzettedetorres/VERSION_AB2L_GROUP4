<!DOCTYPE html>
<html>
<head>
<title>Dormer</title>
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
        <div class="tile bg-color-greenDark" id="manageResident">
           	<a href="goToManageResident"><img src="../../img/invisible-LINK.png" /></a>
        </div>
        <div class="tile bg-color-greenLight" id="room">
            	<a href="goToManageDorm"><img src="../../img/invisible-LINK.png" /></a>
        </div>
    </div>

	<div id="content">
    	<header>
            <h1>Dormer</h1>
        </header>
        <section>
		<div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
	<br/>
	
		<?php
			foreach($data as $d){
				
				echo $d['STUDENTNUMBER'],' ',$d['LASTNAME'],', ',$d['FIRSTNAME'],' ',$d['MIDDLENAME'],'<br>';
				
			}
			
			foreach($guardian as $g){
				
				
				
			}
		?>
		<br/>
		<form name="form1" action = "javascript:exportToPDF()">
					
					<input type="submit" value="EXPORT">
	</form>
	<br />
</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>
	
	<script type="text/javascript">
		function exportToPDF() {
			
			var studnum = "<?php echo $d['STUDENTNUMBER'];?>";
			var fname = "<?php echo $d['FIRSTNAME'];?>";
			var mname = "<?php echo $d['MIDDLENAME'];?>";
			var lname = "<?php echo $d['LASTNAME'];?>";
			var bday = "<?php echo $d['BIRTHDAY'];?>";
			var age = "<?php echo $d['AGE'];?>";
			var course = "<?php echo $d['COURSE'];?>";
			var college = "<?php echo $d['COLLEGE'];?>";
			var classification = "<?php echo $d['CLASSIFICATION'];?>";
			var timeofgrad = "<?php echo $d['ETIMEOFGRAD'];?>";
			var civilstatus = "<?php echo $d['CIVILSTATUS'];?>";
			var homeaddress = "<?php echo $d['HOMEADDRESS'];?>";
			var contactnumber = "<?php echo $d['CONTACTNUMBER'];?>";
			var email = "<?php echo $d['EMAILADDRESS'];?>";
			var scholarship = "<?php echo $d['SCHOLARSHIP'];?>";
			var stfap = "<?php echo $d['STFAPBRACKET'];?>";
			var allowance = "<?php echo $d['MONTHLYALLOWANCE'];?>";
			var religion = "<?php echo $d['RELIGION'];?>";
			var brod = "<?php echo $d['NUMOFBROTHER'];?>";
			var sis = "<?php echo $d['NUMOFSISTER'];?>";
			var status = "<?php echo $d['STATUSOFRESIDENCY'];?>";
			var room = "<?php echo $d['ROOMNUMBER'];?>";
			var date = "<?php echo $d['DATEACCEPTED'];?>";
			var siblings = (parseFloat(brod)+parseFloat(sis)).toString();
			
			var gid = "<?php echo $g['GUARDIANID'];?>";
			var gfname = "<?php echo $g['FIRSTNAME'];?>";
			var gmname = "<?php echo $g['MIDDLENAME'];?>";
			var glname = "<?php echo $g['LASTNAME'];?>";
			var gcivilstatus = "<?php echo $g['CIVILSTATUS'];?>";
			var gaddress = "<?php echo $g['ADDRESS'];?>";
			var gcontactnumber = "<?php echo $g['CONTACTNUMBER'];?>";
			var gemail = "<?php echo $g['EMAILADDRESS'];?>";
			var income = "<?php echo $g['SOURCEOFINCOME'];?>";
			
			var name = fname+ " " + mname+ " "+lname;
			var gname = gfname+ " " + gmname+ " "+ glname;
			//sn="adfas";
			var doc = new jsPDF();
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(20, 40, "Name: _______________________________________");
			doc.text(35, 40, name);
			doc.text(125, 40, "Student number: _________________");
			doc.text(157, 40, studnum);
			doc.text(20, 50, "Birthday: ___________");
			doc.text(39, 50, bday);
			doc.text(85, 50, "Age: ____");
			doc.text(95, 50, age);
			doc.text(120, 50, "Classification: ______________");
			doc.text(147, 50, classification);
			doc.text(20, 60, "Course: ________________________");
			doc.text(36, 60, course);
			doc.text(100, 60, "College: _______________________________");
			doc.text(117, 60, college);
			doc.text(20, 70, "Time of Graduation: ____________");
			doc.text(57, 70, timeofgrad);
			doc.text(20, 80, "Civil Status: __________");
			doc.text(43, 80, civilstatus);
			doc.text(20, 90, "Home Address: _________________________________________________________");
			doc.text(50, 90, homeaddress);
			doc.text(20, 100, "Contact number: _________________");
			doc.text(53, 100, contactnumber);
			doc.text(100, 100, "Email Address: _______________________________");
			doc.text(128, 100, email);
			doc.text(70, 110, "Scholarship: __________________________________");
			doc.text(94, 110, scholarship);
			doc.text(20, 110, "STFAP Bracket: _____");
			doc.text(50, 110, stfap);
			doc.text(20, 120, "Monthly Allowance: _________");
			doc.text(58, 120, allowance);
			doc.text(20, 130, "Religion: ______________________");
			doc.text(38, 130, religion);
			doc.text(20, 140, "Number of siblings: ____");
			doc.text(56, 140, siblings);
			doc.text(70, 150, "Status of Residency: _____________");
			doc.text(110, 150, status);
			doc.text(20, 150, "Room Number: ________");
			doc.text(51, 150, room);
			doc.text(140, 150, "Date Accepted: ____________");
			doc.text(170, 150, date);
			doc.text(20, 160, "Guardian ID: ______________________");
			doc.text(45, 160, gid);
			doc.text(100, 160, "Guardian Name: ________________________________");
			doc.text(132, 160, gname);
			doc.text(20, 170, "Guardian Number: _____________");
			doc.text(57, 170, gcontactnumber);
			doc.text(85, 170, "Guardian Address: _______________________________");
			doc.text(120, 170, gaddress);
			doc.text(20, 180, "Guardian Civil Status: ___________");
			doc.text(60, 180, gcivilstatus);
			doc.text(85, 180, "Guardian Source of Income: ________________");
			doc.text(135, 180, income);
			doc.text(20, 190, "Guardian Email Address: _______________________________");
			doc.text(65, 190, gemail);
			
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html>