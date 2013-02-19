<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE HTML>
<html>
<body>
<h2>SEND REPORT</h2>  
<form name="mail" method="POST" action="email.php">
<br />To:
<br /><input type="text" name="to" />
<br />Subject:
<br />Narrative Report of Dormer X
<br />
<br />Message: 
<br /> 
<br />[sample report]<br />
Dormer X: basic dormer info, statement of account, violation/s *if there are* and some analysis report
<br />
<br /><input type="submit" name="submit" value="Send"/> 
<br />
</form>  

<?php if(isSet($_GET['SUC'])) echo "<span style='color: green;'>SENT!</span>";
	else if(isSet($_GET['ERR'])) echo "<span style='color: red;'>FAILED!</span>";?>



</body>
</html>


<!--
References:
http://www.w3resource.com/php/mail/php-mail-function.php
http://roshanbh.com.np/2007/12/sending-e-mail-from-localhost-in-php-in-windows-environment.html
http://digiex.net/guides-reviews/guides-tutorials/application-guides/544-configuring-php-under-windows-use-gmail-external-smtp-server-ssl.html
http://glob.com.au/sendmail/
http://stackoverflow.com/questions/4948687/xampp-sendmail-using-gmail-account
http://support.google.com/mail/bin/answer.py?hl=en&answer=13287
http://byitcurious.blogspot.com/2009/04/solving-must-issue-starttls-command.html
http://www.w3resource.com/php/mail/php-mail-function.php
-->