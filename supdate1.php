<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$conn= new mysqli("localhost","root","","db1");
$roll_no=$_POST["txtid"];
$name=$_POST["txtname"];
$mobieno=$_POST["txtmn"];
$fees=$_POST["txtfees"];
$gender=$_POST["txtgender"];
$yr=$_POST["txtyr"];

$sql="update  student_tbl set roll_no='". $roll_no ."',name='". $name ."',mobile_no='". $mobieno ."',fees='".$fees."',gender='".$gender."',year='".$yr."' where roll_no=".$roll_no."";
if($conn->query($sql)===true)
{
   header('location:stu.php');
}
else
{ 
  
    echo "unsuccesfull";
}

















}
?>
