<html>
<title>qwerty</title>
<body>
<?php
$connect=mysqli_connect("localhost","root"," ");
if(!$connect)
	echo "could not connect to the server......aborting";
if(!mysqli_select_db($connect,/*"name of the database"*/))
	echo "Could not select databse .........aborting";
$result=mysqli_query($connect,"select * from ///NAMEOFTABLe/// where username='$_request[username]'&& password='$_request[password]'");
while($data=mysqli_fetch_array($result))
{
	//code to check whether the user exists or not 
	//if the user doesnot exist, request him to first signup and redirect him to the signup page..
	//if the user does exist then display his name, photo, previous progress,etc
}
?>
</body>
</html>

