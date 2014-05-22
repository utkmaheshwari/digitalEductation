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
    margin-top: 50px;
    border-top-right-radius: 20px;
     font-family: cursive;
       }

        fieldset{
    margin: 40px 50px 50px 50px;
    padding-left: 100px;
    border-radius: 10px; }
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
    body{
      background-color: #46C7AF;
    }
    textarea{
     border-radius: 10px;
     font-family: cursive;

    }
    input {
      border-radius: 10px;
      text-align: center;
      font-family: cursive;
    }
    td.right-td,td.left-td{
      border-radius: 20px;
    }

	</style>
</head>
<body>
<table>

	<tr style="width:100%;"><div > 
  <td  class="left-td"style=" width:20%;  background-color:#5B9EA3;  ">

<div class="buttons" > 
<button class="sidebutton" type="button" onclick="window.location.href='question_dashboard.php';"> <b>Questions</b> </button>
<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>

<button class="sidebutton" type="button" onclick=""> <b></b> </button>
</div>
</td>
<td  class="right-td" style="width:80%;  background-color:#222930; ">
<div  >

<form method="post" action="" >
<fieldset style=" background-color:#DFEDEB;">
      <table>
            <tr>
                <td> <label >STORY -></label></td> 
                <td>   <textarea cols="75" rows="4" placeholder="Write Your Story Here..." name="question"></textarea><br />
               </td> 
              
               </tr>
               <tr>
                 <td> <label>First choice:</label></td>
                 <td><textarea cols="75" rows="4" placeholder=" Write First choice..." name="answer_1" ></textarea></td>
                 <td><input type="text" name="sol_1" placeholder=" Best Rating 1-5" /></td>
               </tr>
                <tr>
                 <td> <label>Second choice:</label></td>
                 <td><textarea cols="75" rows="4" placeholder=" Write Second choice..." name="answer_2" ></textarea></td>
                 <td><input type="text" name="sol_2" placeholder=" Best Rating 1-5" /></td>
               </tr>
                <tr>
                 <td> <label>Third choice:</label></td>
                 <td><textarea cols="75" rows="4" placeholder=" Write Third choice..." name="answer_3" ></textarea></td>
                 <td><input type="text" name="sol_3" placeholder=" Best Rating 1-5" /></td>
               </tr>
                <tr>
                 <td> <label>Fourth choice:</label></td>
                 <td><textarea cols="75" rows="4" placeholder=" Write Fourth choice..." name="answer_4" ></textarea></td>
                 <td><input type="text" name="sol_4" placeholder=" Best Rating 1-5" /></td>
               </tr>
                <tr>
                 <td> <label>Fifth choice:</label></td>
                 <td><textarea cols="75" rows="4" placeholder=" Write Fifth choice..." name="answer_5" ></textarea></td>
                 <td><input type="text" name="sol_5" placeholder=" Best Rating 1-5" /></td>
               </tr>
               <tr>  <td></td>
               <td>Best Answer: <input type="text" name="best_sol" placeholder=" Input a-e" /></td>
                    <td> <input type="submit" value="Submit" name="submit_form" 
                    style=" width:100px; height:40px; font-family:cursive; background-color:#96E3A5;  font: bolder; " /> </td>
               </tr>

            
      </table>
      </fieldset>
</form>
</div>
 
</div>
<?php 


if(isset($_POST['submit_form'])){
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
 if (isset($_GET['qid'])) {
    $ques_id=$_GET['qid'];
$sql="UPDATE questions SET 
question='{$ques}',rating_sol_1='{$sol_1}'
,answer_1='{$ans1}',rating_sol_2='{$sol_2}'
,answer_3='{$ans3}',rating_sol_3='{$sol_3}'
,answer_3='{$ans3}',rating_sol_4='{$sol_4}'
,answer_4='{$ans4}',rating_sol_5='{$sol_5}'
,answer_5='{$ans5}',best_answer='{$best_ans}'  WHERE question_id=$ques_id";
 }
 
 else { $sql=" INSERT INTO questions ".
"(question,answer_1,rating_sol_1,answer_2,rating_sol_2,answer_3,rating_sol_3,answer_4,rating_sol_4,answer_5,rating_sol_5,best_answer) ".
"VALUES ".
"('$ques','$ans1','$sol_1','$ans2','$sol_2','$ans3','$sol_3','$ans4','$sol_4','$ans5','sol_5','$best_ans')";
      }

$retval=mysql_query($sql,$connection);
if(! $retval ) { die('Could not enter data: ' . mysql_error()); }
mysql_close($connection);
}
 

 ?>
 </td>
 </div>
 </tr>
 </table>

</body>
</html>