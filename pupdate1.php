<?php 

if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $oldimg=$_GET["img"];
   echo $oldimg;
    $pid=$_POST["txtid"];
    $pname=$_POST["txtnm"];
    $pclr=$_POST["txtclr"];
    $price=$_POST["txtprice"];
    $mfg=$_POST["txtmfg"];
    $wrnt=$_POST["txtwar"];
    $soh=$_POST["txtsoh"];
    //$img=$_POST["txtimg"];
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
   include 'db.php';
   $obj=new pro;
   $res=$obj->updtPro($pid,$pname,$pclr,$price,$mfg,$wrnt,$soh,$pimg);
  
if($res===true)
{
   header('location:product.php');
}
else
{ 
  
    echo "unsuccesfull";
}
}
?>