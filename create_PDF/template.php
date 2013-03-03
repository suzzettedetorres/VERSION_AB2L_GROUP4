<!DOCTYPE HTML>
<html>
	<head>
		<title>JS-PDF</title>
		<script type="text/javascript" src="../../jspdf/libs/base64.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/libs/jspdf.js"></script>
	</head>
	<body>
		
				<form name="form1" action = "javascript:exportToPDF()">
					Student Number:
					<input type="text" name="stnum" id="stnum" pattern="[0-9]{4}-[0-9]{5}"   required/>
					<input type="submit" value="EXPORT">
				</form>
				<!--<input type="submit">
				<a href = "javascript:exportToPDF()"> EXPORT </button>-->


	<script type="text/javascript">
		function exportToPDF() {
			
			
			var doc = new jsPDF();
			doc.setFontSize(16);
			doc.text(75, 20, "Women's Residence Hall");		
			doc.setFontSize(11);
			doc.text(20, 40, "Name: _______________________________________");
			doc.text(125, 40, "Student number: _________________");
			doc.text(20, 50, "Birthday: _________________");
			doc.text(85, 50, "Age: _____");
			doc.text(20, 60, "Course: _________________");
			doc.text(80, 60, "College: _________");
			doc.text(120, 60, "Classification: ______________");
			doc.text(20, 70, "Time of Graduation: _________________");
			doc.text(20, 80, "Civil Status: _________________");
			doc.text(20, 90, "Home Address: _________________________________________________________");
			doc.text(20, 100, "Cellphone number: _________________");
			doc.text(100, 100, "Email Address: _______________________________");
			doc.text(70, 110, "Scholarship: __________________________________");
			doc.text(20, 110, "STFAP Bracket: _____");
			doc.text(20, 120, "Monthly Allowance: _________________");
			doc.text(20, 130, "Religion: ______________________");
			doc.text(20, 140, "Affiliation(s): _________________________________________________");
			doc.text(20, 150, "Number of siblings: _________________");
			doc.text(20, 160, "Ailment(s): __________________________________");
			doc.text(120, 160, "Medication: ______________________");
			doc.text(20, 170, "Room number: ________");
			doc.text(20, 180, "Guardian ID: __________________");
			
			
			// Output as Data URI
			doc.output('datauri');
			
			
		}
	</script>

	</body>




</html>