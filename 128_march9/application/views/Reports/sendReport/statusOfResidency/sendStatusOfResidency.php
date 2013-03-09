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
            <h1>Send Status of Residency Report</h1>
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
		echo 'Status of Residency Report of '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].' '.$d['LASTNAME'];
	}
?>
<br />
<br /><b>Message: </b>
<br /> 
<br />Good Day!<br /><br/>
<?php
foreach($dormer as $d){
	echo 'We would like to notify you that Ms. '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].' '.$d['LASTNAME'].', a current dormer of Women\'s Residence Hall';
	
		$month=date('m');
		$day=date('d');
		$year=date('Y');
		$v = 0;
		$u = 0;
	if($violation != NULL){
		foreach($violation as $d){
			$v++;
		}
	}
	//echo 'violation'.$v;
	if($unpaidfeeinfo != NULL){
		foreach($unpaidfeeinfo as $d){
			if(((($year-$d['YEAR'])*12)+($month-$d['MONTH'])) != 0){
				$u++;
			}
		}
	}
	//echo 'unpaid fees'.$u;
	if ($v == 0 && $u == 0){
		echo ' has a <b>Good</b> Status of Residency standing in the dormitory. She has no recorded violations and has paid all her financial accounts on time.';
	}
	else if ($v != 0 && $u == 0){
		if($v == 1){
			echo ' has a <b>Warning</b> Status of Residency standing due to commiting a violation during her stay in the dormitory. The details of her violation is shown below : <br/><br/>';
			foreach($violation as $d){
				echo '<b>'.$d['VIOLATION'].'</b>.<br/>';
			}
		}
		else if($v > 1 && $v <= 3){
			echo ' has a <b>Probation</b> Status of Residency standing due to commiting a notable number of violations during her stay in the dormitory. She has '.$v.' recorded violations which include the following : <br/><br/>';
			foreach($violation as $d){
				echo ' - '.$d['VIOLATION'].'<br/>';
			}
		}
		else if($v > 3){
			echo ' will be charged with <b>Expelled</b> Status of Residency standing due to commiting multiple number of violations during her stay in the dormitory. She has '.$v.' recorded violations which include the following : <br/><br/>';
			foreach($violation as $d){
				echo ' - '.$d['VIOLATION'].'<br/>';
			}
		}
	}
	else if ($v == 0 && $u != 0){
		if($u == 1){
			echo ' has a <b>Warning</b> Status of Residency standing in the dormitory due to not paying a single financial responsibility on time. The details of her unpaid financial account is shown below : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo '<b>'.$d['MONTH'].' '.$d['YEAR'].'</b><br/>';
			}
		}
		else if($u > 1 && $u <= 3){
			echo ' has a <b>Probation</b> Status of Residency standing in the dormitory due to not paying a notable number of financial responsibilities on time. She has '.$u.' unpaid monthly accounts which include the following : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo ' - <b>'.$d['MONTH'].' '.$d['YEAR'].'<br/>';
			}
		}
		else if($u > 3){
			echo ' will be charged with <b>Expelled</b> Status of Residency standing in the dormitory due to not paying multiple number of financial responsibilities on time. She has '.$u.' unpaid monthly accounts which include the following : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo ' - <b>'.$d['MONTH'].' '.$d['YEAR'].'<br/>';
			}
		}
	}
	else{
		if($u == 1 && $v == 1){
			echo ' has a <b>Warning</b> Status of Residency standing in the dormitory due to commiting a violation during her stay in the dormitory and not paying one of her financial responsibilities on time. The details of her violation is shown below : <br/><br/>';
			foreach($violation as $d){
				echo '<b>'.$d['VIOLATION'].'</b>.<br/>';
			}
			echo '<br/>Also, According to record, she has not paid a financial account shown below : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo '<b>'.$d['MONTH'].' '.$d['YEAR'].'</b><br/>';
			}
		}
		else if(($v > 1 && $v <= 3) || ($u > 1 && $u <= 3)){
			echo ' has a <b>Probation</b> Status of Residency standing in the dormitory due to commiting a notable number of violations during her stay in the dormitory and not paying a number of her financial responsibilities on time. She has '.$v.' recorded violations which include the following : <br/><br/>';
			foreach($violation as $d){
				echo ' - '.$d['VIOLATION'].'<br/>';
			}
			echo '<br/>Also, she has '.$u.' unpaid monthly accounts which include the following : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo ' - <b>'.$d['MONTH'].' '.$d['YEAR'].'<br/>';
			}
		}
		else if($v > 3 || $u > 3){
			echo ' will be charged with <b>Expelled</b> Status of Residency standing in the dormitory due to commiting multiple number of violations during her stay in the dormitory and not paying multiple number of her financial responsibilities on time. She has '.$v.' recorded violations which include the following : <br/><br/>';
			foreach($violation as $d){
				echo ' - '.$d['VIOLATION'].'<br/>';
			}
			echo '<br/>Also, she has '.$u.' unpaid monthly accounts which include the following : <br/><br/>';
			foreach($unpaidfeeinfo as $d){
				echo ' - <b>'.$d['MONTH'].' '.$d['YEAR'].'<br/>';
			}
		}
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