
<?php
session_start();
?>
<html>
<head>

<script src="js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="styleshsheet" href="css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>

</head>
<body>
<?php

$nid=$_SESSION["user"];
$cnn=new mysqli('localhost','root','','db1');
$res=$cnn->query("select * from user_tbl where email='".$nid."'");
$row=$res->fetch_assoc();


echo '<div class="jumbotron">';
echo '<h1>'."WelCome , ".$row["name"].'</h1>';
echo '</div>';


?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="produsr.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="produsr.php">Items <span class="sr-only">(current)</span></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile0.php">Your Profile</a></li>
            <li><a href="profile.php"> Edit Profile</a></li>
            <li><a href="pswd.php">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="login.php">Log Out</a></li>
            <li class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Items Here">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 
$cnn=new mysqli("localhost","root","","db1");
$result=$cnn->query("select * from product_tbl");
while($row=$result->fetch_assoc())
{
        echo '<div class="col-sm-6 col-md-4">';
        echo '<div class="thumbnail">';
        echo '<img src='.$row["img"].' height="200px" width="200px">';
        echo '<div class="caption">';
        echo '<h1>'.'<u>'.$row["pname"].'</u>'.'</h1>';
        echo '<center>'.$row["warranty"].'  yrs warranty'.'</center>';
        echo '<center>'.$row["pcolor"].'</center>';
        echo '<center>'.$row["soh"].'   left in stock'.'</center>';

        echo '<p>'.'RS'.'  '.$row["price"].'</p>';
        echo '<p><a href="buy.htm" class="btn btn-info">BUY</a> | <a href="buy.htm" class="btn btn-success">DETAILS</a></p>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
}
?>
</body>
</html>