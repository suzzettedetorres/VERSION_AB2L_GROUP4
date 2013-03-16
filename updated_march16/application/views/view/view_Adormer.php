<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
 <!DOCTYPE html>
<html>
<head>
<title>View a Dormer</title>
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
            <h1>View a Dormer</h1>
        </header>
        <section>
<div id="infosheet">
       <br />
<?php
			foreach($data as $d){
				echo '<h2><b>'.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</b></h2>';
				echo '<table><tbody>';
				echo '<tr><td><b>Student Number : </b></td><td text-align="left">'.$d['STUDENTNUMBER'].'</td></tr>';
				echo '<tr><td><b>Birthday : </b></td><td>';
				switch(substr($d['BIRTHDAY'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['BIRTHDAY'],3,2));
				echo ' '.(substr($d['BIRTHDAY'],6,4)).'</td></tr>';
				echo '<tr><td><b>Age : </b></td><td>'.$d['AGE'].'</td></tr>';
				echo '<tr><td><b>Course : </b></td><td>'.$d['COURSE'].'</td></tr>';
				echo '<tr><td><b>College : </b></td><td>'.$d['COLLEGE'].'</td></tr>';
				echo '<tr><td><b>Classification : </b></td><td>'.$d['CLASSIFICATION'].'</td></tr>';
				echo '<tr><td><b>Expected Time of Graduation : </b></td><td>';
					switch(substr($d['ETIMEOFGRAD'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['ETIMEOFGRAD'],6,4)).'</td></tr>';
				echo '<tr><td><b>Civil Status : </b></td><td>'.$d['CIVILSTATUS'].'</td></tr>';
				echo '<tr><td><b>Home Address : </b></td><td>'.$d['HOMEADDRESS'].'</td></tr>';
				echo '<tr><td><b>Contact Number : </b></td><td>'.$d['CONTACTNUMBER'].'</td></tr>';
				echo '<tr><td><b>Email Address : </b></td><td>'.$d['EMAILADDRESS'].'</td></tr>';
				echo '<tr><td><b>Scholarship : </b></td><td>'.$d['SCHOLARSHIP'].'</td></tr>';
				echo '<tr><td><b>STFAP Bracket : </b></td><td>'.$d['STFAPBRACKET'].'</td></tr>';
				echo '<tr><td><b>Monthly Allowance : </b></td><td>'.$d['MONTHLYALLOWANCE'].'</td></tr>';
				echo '<tr><td><b>Religion : </b></td><td>'.$d['RELIGION'].'</td></tr>';
				
				echo '<tr><td><b>Affiliation/s : </b></td>';
				if($affiliation != NULL){
					echo '<td>';
					$num_a=0;
					foreach($affiliation as $a){
						$num_a++;
							if($num_a == 1)
								echo $a['AFFILIATION'];
							else
								echo ', '.$a['AFFILIATION'];
					}
					echo '</td>';
				}
				else{
					echo '<td>None</td>';
				}
			echo '</tr>';
				
				echo '<tr><td><b>Number of Brother : </b></td><td>'.$d['NUMOFBROTHER'].'</td></tr>';
				echo '<tr><td><b>Number of Sister : </b></td><td>'.$d['NUMOFSISTER'].'</td></tr>';
				echo '<tr><td><b>Birth Order : </b></td><td>'.$d['BIRTHORDER'].'</td></tr>';
				
				echo '<tr><td><b>Ailment/s : </b></td>';
				if($ailment != NULL){
					echo '<td>';
					$num_a=0;
					foreach($ailment as $a){
						$num_a++;
							if($num_a == 1)
								echo $a['AILMENT'];
							else
								echo ', '.$a['AILMENT'];
					}
					echo '</td>';
				}
				else{
					echo '<td>None</td>';
				}
				echo '</tr>';
				
				echo '<tr><td><b>Medication/s : </b></td>';
				if($medication != NULL){
					echo '<td>';
					$num_a=0;
					foreach($medication as $a){
						$num_a++;
							if($num_a == 1)
								echo $a['MEDICATION'];
							else
								echo ', '.$a['MEDICATION'];
					}
					echo '</td>';
				}
				else{
					echo '<td>None</td>';
				}
				echo '</tr>';
				
				echo '<tr><td><b>In Relationship? : </b></td><td>'.$d['INRELATIONSHIP'].'</td></tr>';
				echo '<tr><td><b>Status of Residency : </b></td><td>'.$d['STATUSOFRESIDENCY'].'</td></tr>';
				echo '<tr><td><b>Room Number : </b></td><td>'.$d['ROOMNUMBER'].'</td></tr>';
				echo '<tr><td><b>Date Accepted : </b></td><td>';
				switch(substr($d['DATEACCEPTED'],0,2)){
						case '01':
							echo 'January';
							break;
						case '02':
							echo 'February';
							break;
						case '03':
							echo 'March';
							break;
						case '04':
							echo 'April';
							break;
						case '05':
							echo 'May';
							break;
						case '06':
							echo 'June';
							break;
						case '07':
							echo 'July';
							break;
						case '08':
							echo 'August';
							break;
						case '09':
							echo 'September';
							break;
						case '10':
							echo 'October';
							break;
						case '11':
							echo 'November';
							break;
						case '12':
							echo 'December';
							break;
					}
				echo ' '.(substr($d['DATEACCEPTED'],3,2));
				echo ' '.(substr($d['DATEACCEPTED'],6,4)).'</td></tr>';
			}
			echo '<tr><td><b>Appliance/s in Dormitory : </b></td>';
				if($appliances != NULL){
					echo '<td>';
					$num_a=0;
					foreach($appliances as $a){
						$num_a++;
							if($num_a == 1)
								echo $a['APPLIANCE'];
							else
								echo ', '.$a['APPLIANCE'];
					}
					echo '</td>';
				}
				else{
					echo '<td>None</td>';
				}
			echo '</tr>';
			echo '<tr><td><b>Equipment/s Borrowed : </b></td>';
				if($bequipments != NULL){
					echo '<td>';
					$num_e=0;
					foreach($bequipments as $e){
						$num_e++;
						foreach($equipments as $eq){
							if($eq['CONTROLNUMBER'] == $e['CONTROLNUMBER']){
								if($num_e == 1)
									echo $eq['EQUIPMENTNAME'];
								else
									echo ', '.$eq['EQUIPMENTNAME'];
								break;
							}
						}
					}
					echo '</td>';
				}
				else{
					echo '<td>None</td>';
				}
			echo '</tr>';
			echo '</table>';
			echo '<br/><br/>';
			foreach($guardian as $g){
				echo '<h2>Guardian</h2>';
				echo '<table>';
				echo '<tr><td><b>Name : </b></td><td>'.$g['LASTNAME'].', '.$g['FIRSTNAME'].' '.$g['MIDDLENAME'].'</td></tr>';
				echo '<tr><td><b>Home Address : </b></td><td>'.$g['ADDRESS'].'</td></tr>';
				echo '<tr><td><b>Contact Number : </b></td><td>'.$g['CONTACTNUMBER'].'</td></tr>';
				echo '<tr><td><b>Email Address : </b></td><td>'.$g['EMAILADDRESS'].'</td></tr>';
				echo '<tr><td><b>Civil Status : </b></td><td>'.$g['CIVILSTATUS'].'</td></tr>';
				echo '<tr><td><b>Source of Income : </b></td><td>'.$g['SOURCEOFINCOME'].'</td></tr>';
				echo '</table>';
			}
		?>
<br />
</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>

</body>

</html>


<?php } ?>

<!--References:

Retrived at 2 February, 2013 from
http://simoborto.altervista.org
https://uho.uplb.edu.ph/index.php
http://danielrichardeviant.deviantart.com/
http://dev7studios.com/
-->