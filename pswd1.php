<?php 

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $cnn=new mysqli("localhost","root","","db1");
    $id=$_SESSION["user"];
    $pwd=$_SESSION["pw"];
    $pwd1=$_SESSION["pw1"];
    echo $pwd,$pwd1;
    
   // $pw1=$_POST["txtpw1"];
     $sql="update user_tbl set password='".$pwd1."' where email='".$id."'";
if($cnn->query($sql)===true)
{
   header('location:login.php');
}
else
{ 
  
    echo "unsuccesfull";
}

}
?>