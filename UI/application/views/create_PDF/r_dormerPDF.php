<html>

<head>
	<title> DORMER </title>
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
				
				echo '<b>'.$d['LASTNAME'].', '.$d['FIRSTNAME'].' '.$d['MIDDLENAME'].'</b><br>';
				echo $d['STUDENTNUMBER'].'<br/>';
				$stnum = $d['STUDENTNUMBER'];
			}
		?>
<table id ="forms">
				<form name="form1" action = "javascript:exportToPDF()">
					<?php
					foreach($residencefee as $d){
						$resfee = $d['RESIDENCEFEE'];
					}
					
					foreach($appliancefee as $d){
						$appfee = $d['APPLIANCEFEE'];
					}
					
					foreach($transientfee as $d){
						$transfee = $d['TRANSIENTFEE'];
					}
					
					foreach($reservationfee as $d){
						$reservfee = $d['RESERVATIONFEE'];
					}
					
					foreach($key_deposit as $d){
						$keydepfee = $d['KEYDEPOSITFEE'];
					}
					
					foreach($closed_locker as $d){
						$clocked = $d['CLOSEDLOCKERFEE'];
					}
					foreach($soainfo as $d){
						$m = $d['MONTH'];
						switch($m){
							case '01': $month = 'January';break;
							case '02': $month = 'February';break;
							case '03': $month = 'March';break;
							case '04': $month = 'April';break;
							case '05': $month = 'May';break;
							case '06': $month = 'June';break;
							case '07': $month = 'July';break;
							case '08': $month = 'August';break;
							case '09': $month = 'September';break;
							case '10': $month = 'October';break;
							case '11': $month = 'November';break;
							case '12': $month = 'December';break;
						}
						
						$year = $d['YEAR'];
						
						$date = date('d-m-Y');
						foreach($data as $d){}
					}
					?>
					<tr>
					<td>
					Statement of Account for 
					<?php
						
						
						echo $month.' '.$year;
					?>
					</td>
					</tr>
					<tr>
					<td>
						<td>Residence Fee &nbsp;</td>
						<td><input type = "text" id = "residencefee" name = "residencefee" value="<?php if($residencefee != NULL){echo $resfee;} ?>" required/></td>
					</td>
					</tr>
					<tr>
					<td>
						<td>Appliance Fee &nbsp;</td>
						<td><input type = "text" id = "afee" name = "afee" value="<?php if($appliancefee != NULL){echo $appfee;} ?>"/></td>
					</td>
					</tr>
					<tr>
					<td>
						<td>Transient Fee &nbsp;</td>
						<td><input type = "text" id = "tfee" name = "tfee" value="<?php if($transientfee != NULL){echo $transfee;} ?>"/></td>
					</td>
					</tr>
					<tr>
					<td>
						<td>Reservation Fee &nbsp;</td>
						<td><input type = "text" id = "rfee" name = "rfee" value="<?php if($reservationfee != NULL){echo $reservfee;} ?>"/></td>
					</td>
					</tr>
					<tr>
					<td>
						<td>Key Deposit &nbsp;</td>
						<td><input type = "text" id = "kdeposit" name = "kdeposit" value="<?php if($key_deposit != NULL){echo $keydepfee;} ?>"/></td>
					</td>
					</tr>
					<tr>
					<td>
						<td>Closed Locker &nbsp;</td>
						<td><input type = "text" id = "locker" name = "locker" value="<?php if($closed_locker != NULL){echo $clocked;} ?>"/></td>
					</td>
					</tr>
					<tr>
					<td><input type="submit" value="EXPORT"></td>
					</tr>
				</form>
				</table>
				<!--<input type="submit">
				<a href = "javascript:exportToPDF()"> EXPORT </button>-->

				<br />
</div>
        </section>
        <footer>
            (C)2013 <a class="link link-blue" href="#/">cs128 - Group 4</a>
        </footer>
    </div>

	<script type="text/javascript">
		function exportToPDF() {
			var date = "<?php echo $date?>";
			var fname = "<?php echo $d['FIRSTNAME'];?>";
			var mname = "<?php echo $d['MIDDLENAME'];?>";
			var lname = "<?php echo $d['LASTNAME'];?>";
			var residence=(document.form1.residencefee.value);
			var afee=(document.form1.afee.value);
			var tfee=(document.form1.tfee.value);
			var rfee=(document.form1.rfee.value);
			var kdeposit=(document.form1.kdeposit.value);
			var locker=(document.form1.locker.value);
			var total = parseFloat(residence)+parseFloat(afee)+parseFloat(tfee)+parseFloat(rfee)+parseFloat(kdeposit)+parseFloat(locker);
			//document.write(total);
			var fullname = fname+ " " + mname+ " "+lname;
			
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
			doc.text(85, 110, 'Amount');
			doc.text(150, 120, 'P'+residence);
			doc.text(20, 120, 'Residence Fee:            ________________');
			doc.setFontSize(16);
			doc.text(20, 130, '                                     ________________');
			doc.text(150, 140, 'P'+afee);
			doc.text(20, 140, 'Appliance Fee:             ________________');
			
			doc.setFontSize(16);
			doc.text(20, 150, '                                     ________________');
			doc.text(20, 160, '                                     ________________');
			doc.text(20, 170, '                                     ________________');
			doc.text(20, 180, 'Transient Fee:              ________________');
			doc.text(150, 180, 'P'+tfee);
			doc.setFontSize(16);
			doc.text(20, 190, 'Reservation Fee:          ________________');
			doc.text(150, 190, 'P'+rfee);
			doc.setFontSize(16);
			doc.text(20, 200, 'Key Deposit:                 ________________');
			doc.text(150, 200, 'P'+kdeposit);
			doc.setFontSize(16);
			doc.text(20, 210, 'Closed Locker:             ________________');
			doc.text(150, 210, 'P'+locker);
			doc.setFontSize(16);
			doc.text(20, 230, 'Issued by: _________________    Total:_____________________');
			doc.text(125, 230, 'P'+x);
			doc.text(20, 240, 'OR #:_____________________    Date:_____________________');
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>
		
</body>

</html>