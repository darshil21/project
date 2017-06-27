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
<?php
    require 'navbar.php';
    require 'database.php';
    $obj=new databaseusersign();
    if(isset($_POST["btnsub"]))
    {
        
        if($obj->insuser()===true)
        {
                echo '<script>';
                echo 'alert("Success")'; 
                echo '</script>';   
                header('location:prod_display1.php');       
        }
    }
?>
<form method="post" action="user_sign.php" enctype="multipart/data-flow">
<div class="jumbotron">
    <center><h1><font color="orange">Sign</font><font color="green"> Up !</font></h1></center>
</div>


<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-envelope"></div>
    <div class="col-md-9"><input type="text" name="txtid" class="form-control" placeholder="Enter Id" ></div>
</div>

<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-user"></div>
    <div class="col-md-9"><input type="text" name="txtun" class="form-control" placeholder="Enter Id" ></div>
</div>


<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-lock"></div>
    <div class="col-md-9"><input type="text" name="txtpass" class="form-control" placeholder="Enter Password" ></div>
</div>


<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-earphone"></div>
    <div class="col-md-9"><input type="text" name="txtmob" class="form-control" placeholder="Enter Mobile No" ></div>
</div>



<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-home"></div>
    <div class="col-md-9"><input type="text" name="txtadd" class="form-control" placeholder="Enter Address" ></div>
</div>


<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-btc"></div>
    <div class="col-md-9"><input type="radio" checked name="gender" class="" value="male">Male<input type="radio" name="gender" class=" " value="male">FeMale</div>
</div>


<div class="container form-group ">
    <div class="col-md-2"></div>
    <div class="col-md-1 glyphicon glyphicon-picture"></div>
    <div class="col-md-9"><input type="file" name="img" class="form-control" placeholder="Enter Image Path" ></div>
</div>

<div class="row">
    <center><input type="submit" name="btnsub" class="btn btn-success" value="Submit"></center>
</div>




</form>
</body>
</html>