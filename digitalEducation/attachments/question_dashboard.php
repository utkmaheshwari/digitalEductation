<!DOCTYPE html>



<html>
<head>
	 <title>testing div tags</title>
	 <style type="text/css">
     button.sidebutton{ 
     
     color:black;
     background-color: #4CD7E0;
     height: 50px;
     width: 250px;
     font-size: 20px;
     margin: 20px;
     border-top-right-radius: 20px;
     font-family: cursive;


                      }

     button.main_button{
     	
     	border-color:#4EB1BA;
          border-radius: 10px;
     	margin-right: 5px;
          font-family: cursive;
     	font-size: 20px;
     	padding: .7em;
     	line-height: 20px;
          margin-top: 30px;
          max-width: 130px;
     }  
     .buttons{
          margin-bottom: 20px;
          margin-bottom: auto;
          
         
     }
      body{
      background-color: #46C7AF;
    }

     td.left-td,td.right-td{
          border-radius: 30px; 
     }
	</style>
</head>
<body>
<table>
<tr style="width:100%; position: relative; ">
 <td class="left-td" style=" width:20%; background-color:#5B9EA3; ">
<div  class="buttons" >
 
<button class="sidebutton" type="button" onclick="window.location.href='add question.php';"> <b>Add Questions</b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>


</div>
</td>
<td class="right-td" style="width:80%;  padding-top:10px; padding-left:120px; padding-right:150px; padding-bottom:100px; border-color:black; background-color:#687875;">
<div  >
<br /><br /> <br />
<?php 
// Create Connection 
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}
$sql="SELECT * FROM questions";
$result=mysql_query($sql ,$connection);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{

     $aid=$row['question_id'];
}



for ($i=1; $i<=$aid ; $i++) { 
     $sql="SELECT * FROM questions where question_id=$i";
          $result=mysql_query($sql ,$connection);
          while($row=mysql_fetch_array($result,MYSQL_ASSOC)){

     if (!$row['question']==0) {
          echo '<button class=\'main_button\' type=\'button\'  style="background-color:#6AF03A" onclick="window.location.href=\'view questions.php?qid='.$i.'\';">Question:'.$i.'</button>';

          }
          else 
          {
          echo '<button class=\'main_button\' type=\'button\'  style="background-color:#F28088" onclick="window.location.href=\'add question.php?qid='.$i.'\';">Question:'.$i.'</button>';
  
          }

}

        
     
}
mysql_close($connection);
?>
</div>
</td>
</div>
 </tr>
 </table>
 

</body>
</html>