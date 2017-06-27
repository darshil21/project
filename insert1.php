<?php
$pid="";
$pname="";
$pclr="";
$price="";
$mfg="";
$wrnt="";
$soh="";
$img="";
$cat="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $pid=$_POST["txtid"];
    $pname=$_POST["txtnm"];
    $pclr=$_POST["txtclr"];
    $price=$_POST["txtprice"];
    $mfg=$_POST["txtmfg"];
    $wrnt=$_POST["txtwar"];
    $soh=$_POST["txtsoh"];
    $img="imgs/".basename($_FILES["txtimg"]["name"]);
   // echo $img;
    $cat=$_POST["txtcat"];
    move_uploaded_file($_FILES["txtimg"]["tmp_name"],$img);
    include 'db.php';
    $obj=new pro;
    $res=$obj->insertPro($pname,$pclr,$price,$mfg,$wrnt,$soh,$img,$cat);
   
   if($res===true)
    {
        header("location:product.php");

    }
    else
    {
        
        echo " Not Successfully Insert";
      //  echo $sql;
    }
    

}
?>
