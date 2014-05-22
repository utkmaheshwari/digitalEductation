<!DOCTYPE html>
<html>
<head>
	 <title>testing div tags</title>
	 <style type="text/css">
     button.sidebutton{ 
     color:black;
     background-color:#4CD7E0;
     height: 50px;
     width: 250px;
     font-size: 20px;
     margin: 20px 0px;
     font-family: cursive;
     border-top-right-radius: 20px;
       }

        fieldset{
    margin: 30px 50px 20px 50px;
    padding-left: 80px;
    border-radius: 20px;
    }
    legend{
        padding: .2em;
        border-style: outset;
        font-weight: bold;
        color: rgba(149, 122, 255, 0.6);
        font-family: cursive;
    }
    td{
        font-family:cursive;
        font-size: 15px;  
    }
    textarea{
        font-family: cursive;
         border-radius: 10px;
         text-align: center;

    }
    body{
      background-color: #46C7AF;
    }
   
    input {
      border-radius: 10px;

    }
    td.left-td,td.right-td{
      border-radius: 20px;

    }
   
	</style>
</head>
<body
>
<table>
<tr  style="width:100%;">
	<div  class="main-div"> 
  <td class="left-td" style=" width:20%; background-color:#5B9EA3; ">
<div  >
<br /> <br /> 
<button class="sidebutton" type="button" onclick="window.location.href='question_dashboard.php';"> <b>Questions</b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>


</div>
</td>
<td class="right-td" style=" width:80%; background-color:#222930;">
<div  >

<?php 
$question_id=$_GET['qid'];
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}
$sql=' SELECT * FROM questions where question_id='.$question_id;
$result=mysql_query($sql ,$connection);

while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
    $a=$row['question'];
    $a1=$row['answer_1'];
    $a2=$row['answer_2'];
    $a3=$row['answer_3'];
    $a4=$row['answer_4'];
    $a5=$row['answer_5'];
    $sol_1=$row['rating_sol_1'];
    $sol_2=$row['rating_sol_2'];
    $sol_3=$row['rating_sol_3'];
    $sol_4=$row['rating_sol_4'];
    $sol_5=$row['rating_sol_5'];
    $best_sol=$row['best_answer'];


}
mysql_close($connection);


?>
<form method="post" action="">
<fieldset style=" background-color:#DFEDEB;">
      <table>
            <tr>
                <td> <label >STORY -></label></td> 
                <td>   <textarea cols="80" rows="4" name="question"><?php echo $a; ?></textarea><br />

               </td> 
               </tr>
               <tr>
                 <td> <label>First choice:</label></td>
                 <td><textarea cols="80" rows="4" name="answer_1"  ><?php echo $a1; ?></textarea></td>
                 <td> Best rating:</td>
                  <td><textarea type="text" name="sol_1" cols="5" rows="1" ><?php echo $sol_1; ?> </textarea></td>
               </tr>
                <tr>
                 <td> <label>Second choice:</label></td>
                 <td><textarea cols="80" rows="4" name="answer_2" ><?php echo $a2; ?></textarea></td>
                  <td> Best rating:</td>
                  <td><textarea type="text" name="sol_2" cols="5" rows="1" ><?php echo $sol_2; ?> </textarea></td>
               </tr>
                <tr>
                 <td> <label>Third choice:</label></td>
                 <td><textarea cols="80" rows="4" name="answer_3" ><?php echo $a3; ?></textarea></td>
                  <td> Best rating:</td>
                  <td><textarea type="text" name="sol_3" cols="5" rows="1" ><?php echo $sol_3; ?> </textarea></td>
               </tr>
                <tr>
                 <td> <label>Fourth choice:</label></td>
                 <td><textarea cols="80" rows="4"name="answer_4" ><?php echo $a4; ?></textarea></td>
                  <td> Best rating:</td>
                  <td><textarea type="text" name="sol_4" cols="5" rows="1" ><?php echo $sol_4; ?> </textarea></td>
               </tr>
                <tr>
                 <td> <label>Fifth choice:</label></td>
                 <td><textarea cols="80" rows="4" name="answer_5" ><?php echo $a5; ?></textarea></td>
                  <td> Best rating:</td>
                  <td><textarea type="text" name="sol_5" cols="5" rows="1" ><?php echo $sol_5; ?> </textarea></td>
               </tr>
               <tr></tr>
               <tr>
                 <td> <label>Best answer:</label></td>
                 <td><textarea cols="5" rows="1" name="best_sol" ><?php echo $best_sol; ?></textarea></td>
               </tr>
               <tr>  
                    <td></td>
                   <td> <table> 
                     <td> <input type="submit" value="DELETE QUESTION" name="delete_question" 
                     style=" height:30px; background-color:#EBA2B3; font-family:cursive " /> </td> 
                    <td></td> <td></td> 
                    <td> <input  type="submit" value="DONE EDITING" name="submit_question"
                     style="height:30px; margin-left:200px; background-color:#96E3A5; font-family:cursive;"  /> </td>
                    </table></td>
               </tr> 

            
     
<tr>
<td>
<?php

if(isset($_POST['submit_question'])){
// Create Connection 
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}
 
 
$ques=$_POST['question'];

 $ans1=$_POST['answer_1'];
 $sol_1=$_POST['sol_1'];

 $ans2=$_POST['answer_2'];
 $sol_2=$_POST['sol_2'];
 
 $ans3=$_POST['answer_3'];
 $sol_3=$_POST['sol_3'];
 
 $ans4=$_POST['answer_4'];
 $sol_4=$_POST['sol_4'];
 
 $ans5=$_POST['answer_5'];
 $sol_5=$_POST['sol_5'];
 $best_ans=$_POST['best_sol'];
 
 $sql="UPDATE questions SET question='{$ques}',best_answer='{$best_ans}',
 answer_1='{$ans1}',rating_sol_1='{$sol_1}',
 answer_2='{$ans2}',rating_sol_2='{$sol_2}',
 answer_3='{$ans3}',rating_sol_3='{$sol_3}',
 answer_4='{$ans4}',rating_sol_4='{$sol_4}',
 answer_5='{$ans5}',rating_sol_5='{$sol_5}' 
  WHERE question_id=$question_id";



$retval=mysql_query($sql,$connection);
if(! $retval ) { die('Could not enter data: ' . mysql_error()); }
mysql_close($connection);
header("location:question_dashboard.php");

}


if(isset($_POST['delete_question'])){
// Create Connection 
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}
 
 

 
 
 

$sql="UPDATE questions SET question=0 ,best_answer=0,
 answer_1=0 ,rating_sol_1=0 ,
 answer_2=0 ,rating_sol_2=0 ,
 answer_3=0 ,rating_sol_3=0 ,
 answer_4=0 ,rating_sol_4=0 ,
 answer_5=0 ,rating_sol_5=0
  WHERE question_id=$question_id";
 

$retval=mysql_query($sql,$connection);
if(! $retval ) { die('Could not enter data: ' . mysql_error()); }
mysql_close($connection);
header("location:question_dashboard.php");
}
 
 ?></td>
 </tr>
  </table>
      </fieldset>
      </form>
      </div>
      </td>
      </div>
      </tr>
      </table>
 
</body>
</html>