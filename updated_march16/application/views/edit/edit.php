<?php
if($this->session->userdata('logged_in') != TRUE){
	$this->load->view("Login.php");
}else{

?>
 <!DOCTYPE html>
<html>
<head>
<title>Update Resident Record</title>
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
            <h1>Update Resident Record</h1>
        </header>
        <section>
        <div id="box2">
        <div id="half">
        <ul class="listview">
		  <li>
           <div class="icon">
            <a href="editADormer"><img src="../../img/editdormer.png" /></a>
           </div>
           <div class="data">
            <h4><a href="editADormer">Edit Dormer's Record</a></h4>
            <p>Edit a Dormer's Record.</p>
           </div>
        </li>
		<li>
           <div class="icon">
            <a href="goToUpdateAffiliation"><img src="../../img/affiliation.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToUpdateAffiliation">Update a Dormer's Affiliation Record</a></h4>
            <p>Update a dormer's affiliation record.</p>
           </div>
        </li>
		<li>
           <div class="icon">
            <a href="goToUpdateAilment"><img src="../../img/ailment.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToUpdateAilment">Update a Dormer's Ailment Record</a></h4>
            <p>Update a dormer's ailment record.</p>
           </div>
        </li>
          <!--<li>
           <div class="icon">
		<a href="goToAddPaymentRecord"><img src="../../img/addpayment.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToAddPaymentRecord">Add Payment Record</a></h4>
            <p>Add a Dormer by choosing in the reservation list.</p>
           </div>
          </li>--->
         </ul>
         </div>
		 
        <div id="half2">
        <ul class="listview">
        	
		<li>
           <div class="icon">
            <a href="goToUpdateMedication"><img src="../../img/med.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToUpdateMedication">Update a Dormer's Medication Record</a></h4>
            <p>Update a dormer's medication record.</p>
           </div>
        </li>
		<li>
           <div class="icon">
            <a href="goToUpdateBorrowedEquipment"><img src="../../img/updateequip.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToUpdateBorrowedEquipment">Update a Dormer's Borrowed Equipment</a></h4>
            <p>Update the dormer's record of borrowed equipment.</p>
           </div>
        </li>
		<li>
           <div class="icon">
		   <a href="goToUpdate_Appliances"><img src="../../img/app.png" /></a>
           </div>
           <div class="data">
            <h4><a href="goToUpdate_Appliances">Update a Dormer's Appliances</a></h4>
            <p>Update a dormer's appliances record.</p>
           </div>
          </li>
        </ul>
        </div>
		</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    

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