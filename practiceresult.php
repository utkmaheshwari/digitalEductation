<?php
session_start();
$i=0;
while ($i<$_SESSION["size"])
{
	echo $_SESSION["name"]["$i"]." ".$_SESSION["id"]["$i"]." ".$_SESSION["job"]["$i"]."<br>";
	$i=$i+1;
}
session_destroy();
?>
