
<html>
<head>
    <script src="js/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
    
</head>
<body class="container">
<form method="post" action="user_edit.php" enctype="multipart/form-data">
<?php
    require 'navbar.php';
    require 'database.php';
    $obj=new databaseuser();
    $result=$obj->getuser();
    $row=$result->fetch_assoc();
    $tg="images/";
    if(isset($_POST["btnup"]))
    {
        $pimg=basename($_FILES["f1"]["name"]);
        if($pimg=="")
        {
            $pimg=$row["uimg"];
        }
         else
        {
            $tg1=$tg.$pimg;
            unlink($row["uimg"]);
            move_uploaded_file($_FILES["f1"]["tmp_name"],$tg1);
            $pimg=$tg1;  
      }
        $conn=new mysqli('localhost','root','','testdb');
        $sql="update user_tbl set uname='".$_POST["txtname"]."',upassword='".$_POST["txtpass"]."',umobileno='".$_POST["txtmobi"]."',uaddress='".$_POST["txtadd"]."',ugender='".$_POST["gen"]."',uimg='".$pimg."' where uid='".$_SESSION["usid"]."'  ";
        if($conn->query($sql)===true)
        {
            header('location:user_disp.php');
        }
    }
?>

<div class="jumbotron">
    <h1><center>View Profile</center></h1>
</div>
<div class="row form-group">
    <div class="col-md-5">
        <img src='<?php  echo $row["uimg"] ?>' class="img-responsive img-circle" height="500px" width="400px"/>
        <input type="file" name="f1">
    </div>
    <div class="col-md-7">
        <input type="text" name="txtid" value='<?php  echo $row["uid"] ?>' class="form-control">
        <input type="text"  name="txtname" value='<?php  echo $row["uname"] ?>' class="form-control">
        <input type="text" name="txtpass" value='<?php  echo $row["upassword"] ?>' class="form-control">
        <input type="text" name="txtmobi"  value='<?php  echo $row["umobileno"] ?>' class="form-control">
        <input type="text"  name="txtadd" value='<?php  echo $row["uaddress"] ?>' class="form-control">
        <input type="radio" name="gen" value="male"<?php if($row["ugender"]=="male"){ echo "checked";}?>>Male
        <input type="radio" name="gen" value="female"<?php if($row["ugender"]=="female"){ echo "checked";}?>>Female
        <br><input type="submit" name="btnup" value="Save" class="btn btn-success">
    </div>
</div>
</form>
</html>