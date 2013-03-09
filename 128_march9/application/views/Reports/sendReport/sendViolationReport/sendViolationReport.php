<?php
	//session_start();
	//session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>Send Report</title>
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
            <h1>Send Violation Report</h1>
        </header>
        <section>
        <br />
        
        <form name="mail" method="POST" action="sendReport">
<br /><b>To:</b>
<br />
<?php
foreach($dormer as $d){
	echo '<pre> <label class="input-control radio"><input type="radio" name="to" checked value="'.$d['EMAILADDRESS'].'"><span class="helper">  <b>Dormer : </b>'.$d['EMAILADDRESS'].'</td><td> ('.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].' '.$d['LASTNAME'].')</span></label></pre>';
	foreach($guardian as $g){
		echo '<pre> <label class="input-control radio"><input type="radio" name="to" value="'.$g['EMAILADDRESS'].'"><span class="helper">  <b>Guardian : </b>'.$g['EMAILADDRESS'].'</td><td> ('.$g['FIRSTNAME'].' '.$g['MIDDLENAME'].' '.$g['LASTNAME'].')</span></label></pre>';
	}
}
?>
<br /><b>Subject:</b>
<br />
<?php
	foreach($dormer as $d){
		echo 'Violation Report of '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].' '.$d['LASTNAME'];
	}
?>
<br />
<br /><b>Message: </b>
<br /> 
<br />Good Day!<br /><br/>
<?php
foreach($dormer as $d){
	echo 'We would like to notify you that Ms. '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].' '.$d['LASTNAME'].', a current dormer of Women\'s Residence Hall';
	
	if($violations != NULL){
		$i = 0;
		foreach($violations as $v){
			$i++;
		}
		echo ' garnered '.$i;
		if($i == 1)
			echo ' violation';
		else
			echo ' violations';
		echo ' during her stay in the dormitory. ';
		if($i == 1)
			echo 'Below is the violation garnered:';
		else
			echo 'Listed below are the violations garnered:';
		echo '<br/>';
		foreach($violations as $v){
			echo '<br/> - '.$v['VIOLATION'];
		}
	}
	else{
		echo ' has no recorded violations and has a good standing in the dormitory.';
	}
	
	echo '<br/><br/>Sincerely yours,<br/><b>Women\'s Residence Hall Management</b>';
	}
?>
<br />
<br /><input type="submit" name="submit" value="Send"/> 
<br />
</form>  

<?php if(isSet($_GET['SUC'])) echo "<span style='color: green;'>SENT!</span>";
	else if(isSet($_GET['ERR'])) echo "<span style='color: red;'>FAILED!</span>";?>
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
http://www.w3resource.com/php/mail/php-mail-function.php
http://roshanbh.com.np/2007/12/sending-e-mail-from-localhost-in-php-in-windows-environment.html
http://digiex.net/guides-reviews/guides-tutorials/application-guides/544-configuring-php-under-windows-use-gmail-external-smtp-server-ssl.html
http://glob.com.au/sendmail/
http://stackoverflow.com/questions/4948687/xampp-sendmail-using-gmail-account
http://support.google.com/mail/bin/answer.py?hl=en&answer=13287
http://byitcurious.blogspot.com/2009/04/solving-must-issue-starttls-command.html
http://www.w3resource.com/php/mail/php-mail-function.php
-->