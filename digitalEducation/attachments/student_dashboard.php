<?php 
session_start();
if(isset($_POST['submit_form']))
{
   $_SESSION['id']=$_SESSION['id']+1;  
}
if (isset($_POST['previous_question'])) {
      $_SESSION['id']=$_SESSION['id']-1;
}
   if(isset($_SESSION['id']))
   {$aid=$_SESSION['id'];}
  else{
     $_SESSION['id']=1;
     $aid=1;
  }
// Create Connection 
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}


$sql= "SELECT question,answer_1,answer_2,answer_3,answer_4,answer_5 FROM questions where question_id=$aid";
$result=mysql_query($sql ,$connection);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
     
    $a=$row['question'];
    $a1=$row['answer_1'];
    $a2=$row['answer_2'];
    $a3=$row['answer_3'];
    $a4=$row['answer_4'];
    $a5=$row['answer_5'];

}

mysql_close($connection);

?>

<html>
<head>
	 <title>Srishti Student Dashboard</title>
	 <style type="text/css">
     button.sidebutton{ 
   background-color: rgba(0,0, 0, 0.5);
    color:#fff;
    border: 1px solid #fff;
      height: 45px;
     width: 150px;
     font-size: 20px;
     margin: 5px;
     border-top-right-radius: 20px;
     font-family:cursive;


                      }

    fieldset{
    margin: 30px 50px 20px 50px;
    max-width: 70%;
    border-radius: 20px;
    padding: .5em;
    background-color: rgba(0,0, 0, 0.5);
    color:#fff;
    }
    legend{
        padding: .2em;
        border-style: outset;
        font-weight: bold;
        color: rgba(149, 122, 255, 0.6);
        font-family: cursive;
        border-radius: 10px;
        background-color: rgba(0,0, 0, 0.5);
        color:#fff;
    }
     
     button{
          color:#fff;
     background-color:rgba(0,0, 0, 0.5);
     height: 30px;
     width: 250px;
     font-size: 20px;
     font-family: cursive;
     border-radius: 10px;
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
     td{
           color:#fff;
          font-family: cursive;
          font-size: 16px;
     }
      .main-part{
      width: 100%;
     height: 100%;
     
      }
      body{
          background-image: url('images/image3.jpg') ;
      }
      .top-div{
       background-image: url('images/image2.jpg') ;   
      }

    
	</style>
</head>
<body>
<div class="top-div">
<table>
<tr>
<td><img src="images/logo_new.png" width="200" height="50" alt="e-SHRISHTI Logo"></td>
<td>&nbsp; &nbsp;</td>
<td>&nbsp; &nbsp;</td>
<td> </td>
</tr>
</table>
</div>
<div class="main-part">
<table>
     <tr>
          <td> Name: Sarabjeet Singh</td>
  </tr>
  <tr>
       <td> Srishti ID: 13312022</td>
  </tr>
</table>
<table>
<tr style="width:100%; position: relative; ">
 <td class="left-td" style=" width:20%; background-color:; ">
<div  class="buttons" >
 
<button class="sidebutton" type="button" onclick=""> Question 1 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 2 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 3 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 4</button><br />

<button class="sidebutton" type="button" onclick=""> Question 5 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 6 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 7 </button><br />

<button class="sidebutton" type="button" onclick=""> Question 8 </button><br />

<button class="sidebutton" type="button" onclick="">Question 9 </button><br />

<button class="sidebutton" type="button" onclick="">Question 10</button><br />

</div>
</td>
<td style=" width:60%; background-color:; ">
<div class="main_element">
 <form method="post" action="">
<fieldset>
<legend><?php echo "Question No".$aid;?></legend>
<table >
 <tr>
 <td>Story-></td>
 <td colspan="4"> <?php echo $a; ?></td> 
 </tr>
 <tr>
     <td width="5%">a)</td>
     <td width="50%"> <?php echo $a1; ?> </td>
     <td width="30%">
    <input type="radio" class="rating-input" value="1" name="rating-input-1" onselect="selected" />
   
    <input type="radio" class="rating-input" value="2" name=="rating-input-1"/>
    
    <input type="radio" class="rating-input" value="3" name="rating-input-1" />
   
    <input type="radio" class="rating-input" value="4" name="rating-input-1" />
   
    <input type="radio" class="rating-input" value="5" name="rating-input-1" />
    </td>
    <td> 
    
    </td>

 </tr>
 <tr>
     <td width="5%">b)</td>
     <td width="50%"> <?php echo $a2;  ?></td>
     <td width="30%">
    <input type="radio" class="rating-input" name="rating-input-2" value="1"/>
   
    <input type="radio" class="rating-input" value="2" name="rating-input-2"/>
    
    <input type="radio" class="rating-input" value="3" name="rating-input-2"/>
   
    <input type="radio" class="rating-input" value="4" name="rating-input-2" />
   
    <input type="radio" class="rating-input" value="5" name="rating-input-2"/>
    </td>
 </tr>
 <tr>
     <td width="5%">c)</td>
     <td width="50%"> <?php echo $a3;  ?></td>
     <td width="30%">
    <input type="radio" class="rating-input" name="rating-input-3" value="1"/>
   
    <input type="radio" class="rating-input" value="2" name="rating-input-3"/>
    
    <input type="radio" class="rating-input" value="3" name="rating-input-3"/>
   
    <input type="radio" class="rating-input" value="4" name="rating-input-3"/>
   
    <input type="radio" class="rating-input" value="5" name="rating-input-3"/>
    </td>
 </tr>
 <tr>
     <td width="5%">d)</td>
     <td width="50%"> <?php echo $a4;  ?></td>
     <td width="30%">
    <input type="radio" class="rating-input" name="rating-input-4" value="1"/>
   
    <input type="radio" class="rating-input" value="2" name="rating-input-4"/>
    
    <input type="radio" class="rating-input" value="3" name="rating-input-4"/>
   
    <input type="radio" class="rating-input" value="4" name="rating-input-4"/>
   
    <input type="radio" class="rating-input" value="5" name="rating-input-4"/>
    </td>
 </tr>
 <tr>
     <td width="5%">e)</td>
     <td width="50%"> <?php echo $a5;  ?></td>
     <td colspan="2" width="30%">
    <input type="radio" class="rating-input" name="rating-input-5" value="1"/>
   
    <input type="radio" class="rating-input" value="2" name="rating-input-5"/>
    
    <input type="radio" class="rating-input" value="3" name="rating-input-5"/>
   
    <input type="radio" class="rating-input" value="4" name="rating-input-5"/>
   
    <input type="radio" class="rating-input" value="5" name="rating-input-5"/>
    </td>
 </tr>
 <tr>
    <td width="10%"></td>
     <td width="30%">Best Answer you like</td>
     

     <td > 
    <textarea type="text" name="best_answer" style="font-family: cursive;
         border-radius: 5px;
         text-align: center;
         width:120px;
         height:35px;
         pa" > </textarea>
     </td>
     <td></td>

 </tr>
<tr>
<td></td>
<td><button type="submit" name="previous_question" value="Previous">Previous</button></td>

<td>
 <button type="submit" name="submit_form" value="Next" > Next</button>
 </td>
 </tr>
  </table>
  </fieldset>
</form>
</div>
</div>
</td>
 </tr>
 </table>
 </div>


<?php 
if (isset($_POST['submit_form'])) {
  # code...

if($_POST['submit_form']=='Next'){
// Create Connection 
$connection = mysql_connect("localhost","savvisingh" ,"waheguru12" );
if(!$connection){
die("Databse connection failed:  " .mysql_error());
}
$db_select = mysql_select_db("project_1",$connection);
if (!$db_select){
die("Database selection failed:  " .mysql_error());
}
 
 $question_id=$aid;
 

 $ans1=$_POST['rating-input-1'];
 
 $ans2=$_POST['rating-input-2'];
 
 $ans3=$_POST['rating-input-3'];
 
 $ans4=$_POST['rating-input-4'];
 
 $ans5=$_POST['rating-input-5'];
 
 $bestans=$_POST['best_answer'];
 
 $sql=" INSERT INTO student_response ".
"(question_id,responce_1,responce_2,responce_3,responce_4,responce_5,mega_responce) ".
"VALUES ".
"('$question_id','$ans1','$ans2','$ans3','$ans4','$ans5','$bestans')";

$retval=mysql_query($sql,$connection);
if(! $retval ) { die('Could not enter data: ' . mysql_error()); }
mysql_close($connection);}
}
 

 ?>

 </body>
</html>