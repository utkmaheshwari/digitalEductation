<?php
session_start();
$connect=mysqli_connect("localhost","root","");
if(!$connect)
{
	echo"could not connect....aborting";
}
/*if(!mysqli_query($connect,"create database heaven"))
{
	echo"could not create database.........aborting";
}*/
if(!mysqli_select_db($connect,"heaven"))
{
	echo "could not select database...........aborting";
}
/*if(!mysqli_query($connect,"create table cloud(name varchar(10), id varchar(5), job varchar(10))"))
{
	echo "could not create table..............aborting";
}*/

/*$_SESSION['name1']="qaz";
$_SESSION['name2']="wsx";
$_SESSION['id1']="101";
$_SESSION['id2']="103";
$_SESSION['job1']="edc"; 
$_SESSION['job2']="rfv";
*/
/*echo"<br>*******************<br>";
echo $_SESSION['name1']." ".$_SESSION['id1']." ".$_SESSION['job1'];
echo $_SESSION['name2']." ".$_SESSION['id2']." ".$_SESSION['job2'];
echo"<br>*******************<br>";
*/
/*if(!mysqli_query($connect,"insert into lkjh values('$_SESSION[name1]','$_SESSION[id1]','$_SESSION[job1]')"))
{
	echo "could  not enter data no 1";
}
if(!mysqli_query($connect,"insert into lkjh values('$_SESSION[name2]','$_SESSION[id2]','$_SESSION[job2]')"))
{
	echo "could not enter data no 2";
}*/
if(!mysqli_query($connect,"insert into cloud values('$_POST[name]','$_POST[id]','$_POST[job]')"))
{
	echo "could  not enter data from form";
}


$select=mysqli_query($connect,"select * from cloud");
if(!$select){
	echo "could not select the data from the databse";
}
$i=0;
while($data=mysqli_fetch_array($select))
{
	/*echo"<br>*******************<br>";
	echo $data['name']." ".$data['id']." ".$data['job']."<br>";
	echo"<br>*******************<br>";*/
	$_SESSION["name"]["$i"]=$data["name"];
	$_SESSION["id"]["$i"]=$data["id"];
	$_SESSION["job"]["$i"]=$data["job"];
	++$i;
}
$_SESSION["size"]=$i;

echo"<a href='practiceresult.php'>click here </a>";
//session_destroy();
mysqli_close($connect);
?>