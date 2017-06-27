<?php 

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $pid=$_SESSION["user"];
    $oldimg=$_GET["img"];
   
   // $img=$_POST["txtimg"];
    $pimg=basename($_FILES["txtimg"]["name"]);
    if($pimg=="")
    {
        $pimg=$oldimg;
    }
    else
    {
            unlink($oldimg);
            move_uploaded_file($_FILES["txtimg"]["tmp_name"],"imgs/".$pimg);
            $pimg="imgs/".$pimg;
    }
  $cnn=new mysqli("localhost","root","","db1");
   $sql="update user_tbl set img='".$pimg."' where email=".$pid;
   $result=$cnn->query($sql);
   $row=$result->fetch_assoc();
   /*if($oldimg!="")
   {
       $img=$row["img"];
   }*/

if($result===true)
{
   header('location:profile0.php');
}
else
{ 
  
    echo "unsuccesfull";
}
}