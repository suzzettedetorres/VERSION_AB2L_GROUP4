<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
<!DOCTYPE html>
<html>
<head>
<title>View Accumulated Fees</title>
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
            <h1>Choose Month, Year to Generate Fees</h1>
        </header>
        <section>
       <div class="desc bg-color-green">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere convallis ante eget condimentum. Aliquam porttitor gravida leo eget egestas. Nulla facilisi. Aenean placerat diam lectus. Phasellus id rutrum massa. Fusce fringilla, neque in ullamcorper placerat, sapien dolor fermentum nisi, ut gravida dui lorem eu nisi. Vivamus tincidunt cursus molestie. Mauris enim lacus, vestibulum eget dapibus sit amet, tempus eu augue.
	</div>
<div id="infosheet">
       <br />


<?php
		$month = date('m');
		$year = date('Y');
		
	?>
	
<form id="chooseMonthYear" name="chooseMonthYear" method="post" action="viewAccumulatedFees" onsubmit="">
	<table>
	<tr>
	<td>
	Month
	</td>
	<td>
	<div class="span3 input-control select" id="M">
	<select name="month" id="month">
		<option value="01" <?php if($month==01) print 'selected="selected"'?>>January</option>
		<option value="02" <?php if($month==02) print 'selected="selected"'?>>February</option>
		<option value="03" <?php if($month==03) print 'selected="selected"'?>>March</option>
		<option value="04" <?php if($month==04) print 'selected="selected"'?>>April</option>
		<option value="05" <?php if($month==05) print 'selected="selected"'?>>May</option>
		<option value="06" <?php if($month==06) print 'selected="selected"'?>>June</option>
		<option value="07" <?php if($month==07) print 'selected="selected"'?>>July</option>
		<option value="08" <?php if($month==08) print 'selected="selected"'?>>August</option>
		<option value="09" <?php if($month==09) print 'selected="selected"'?>>September</option>
		<option value="10" <?php if($month==10) print 'selected="selected"'?>>October</option>
		<option value="11" <?php if($month==11) print 'selected="selected"'?>>November</option>
		<option value="12" <?php if($month==12) print 'selected="selected"'?>>December</option>
	</select>
	</div>
	</td>
	</tr>
	<tr>
	<td>
	Year
	</td>
	<td>
	<div class="input-control number inputStyle" id="Y">
    <input name="year" id="year" size="4" type="number" value="<?php print $year?>" min="1909" max="<?php print $year?>" required//>
    </div>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	<input type="submit" class="btn-three" value="Select" onclick="" />
	</td>
	</tr>
	</table>
	</form>
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