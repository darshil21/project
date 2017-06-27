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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="product.php"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="product.php">Items <span class="sr-only">(current)</span></a></li>
        <li><a href="#"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="product.php">View Product</a></li>
            <li><a href="#"> </a></li>
            <li><a href="#"></a></li>
            <li class="divider"></li>
            <li><a href="pinsert.php">Add Product</a></li>
            <li class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile0.php">Your Profile</a></li>
            <li><a href="profile.php"> Edit Profile</a></li>
            <li><a href="pswd.php">Change Password</a></li>
            <li class="divider"></li>
            <li><a href="login1.php">Log Out</a></li>
            <li class="divider"></li>
            <li><a href="#"></a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  class="active" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu active" role="menu">
            <li><a href="cat.php">View Category</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li class="divider"></li>
            <li><a href="cinsert.php">Add Category</a></li>
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
        <li><a href="login1.php">Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
<table class="table">
<h1><center>Insert</center></h1>
<tr><td>Category ID:</td><td><input type="text" class="form-control" name="txtid"></td></tr></br>
<tr><td>Category NAME:</td><td><input type="text" class="form-control" name="txtnm"></td></tr></br>
</table>
<center><input type="submit" class="btn btn-info btn-lg" name="btnin" vaule="submit"></center>

</form>
<?php
$cid="";
$cname="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $cid=$_POST["txtid"];
    $cname=$_POST["txtnm"];
    include 'db.php';
   $obj=new cat;
   $res=$obj->insertCat($cid,$cname);
   if($res===true)
    {
        echo "sucessful";
        header('location:cat.php');

    }
    else
    {
        
        echo " Not Successfully Insert";
        echo $sql;
    }
}
?>
</body>
</html>