<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
</head>
<body style="background-color: orange">
	<img src="images/cover2.jpg" style="width:100%;height: 400px">
<center>	
<h1 style="background-color: red;color:white">WELCOME TO GROUP CHAT APPLICATION</h1>
</center>
<center>
<?php
if (isset($_GET['msg'])) {
	
	echo $_GET['msg'];
}

?>
<fieldset style="background-color:yellow">
	<legend style="color: darkred"><h1>LOGIN HERE</h1></legend>
<form action="loginprocess.php" method="POST">	
email:<input type="email"  name="email">
<br>
<br>
password:<input type="password" name="pass">
<br>
<br>
<input type="submit" name="login" value="LOGIN">
</form>
</fieldset>
</center>

</body>
</html>