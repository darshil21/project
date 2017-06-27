<?php 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $cnn=new mysqli("localhost","root","","db1");
   
    $name=$_POST["txtname"];
    $em=$_POST["txtemail"];
    $img=$_POST["txtimg"];
    $pw=$_POST["txtpw"];
    $mobile=$_POST["txtmobile"];
    $add=$_POST["txtadd"];
    $gen=$_POST["txtgen"];
    echo $name , $em , $pw , $mobile,$add;
   echo $gen;
    $sql="update user_tbl set name='".$name."',email='".$em."',mobileno='".$mobile."',address='".$add."',gender='".$gen."',img='".$img."' where email='".$em."'";
if($cnn->query($sql)===true)
{
   header('location:profile0.php');
}
else
{ 
  
    echo "unsuccesfull";
}
}