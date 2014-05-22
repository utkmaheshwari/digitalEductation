<html>
<title></title>
<body>
<?php
$connect=mysqli_connect("localhost","root","");
if(!$connect)
	echo "could ot connect to the server.....aborting";
if(!mysqli_select_db($connect,/*"name of the datbase"*/));
	echo "coluld not select database..........aborting";
if(!mysqli_query("insert into ///nmaeoftable/// values '$_REQUEST[username]','$_REQUEST[password]'"))
	echo "could not create a new user entry";
?>
</body>
</html>