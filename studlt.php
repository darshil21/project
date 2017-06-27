<?php 
$id=$_GET["id"];
$cnn=new mysqli("localhost","root","","db1");
$sql="delete from student_tbl where roll_no=".$id;
if($cnn->query($sql)===true)
{
    header("location:student.php");
}
?>