<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-3.2.1.min"></script>

<link rel="stylesheet" href="css/bootstrap.min">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min"></script>

</head>
<body>
<?php
echo $_SESSION["username"];
?>
<form action="a.php" method="post">
<div class="container">
<h1><nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</button>-->
      <a class="glyphicon glyphicon-user" aria-hidden="true"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#">Sign In</a></li>

        
</nav>
</h1>
</div>
<div class="container">

<div class="col-md-9">

<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Email-Id:</span>
  <input type="email" class="form-control" placeholder="Recipient's userId" aria-describedby="basic-addon2">
 
</div>
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Password:</span>
  <input type="password" class="form-control" placeholder="Please enter your password." aria-describedby="basic-addon2">
 
</div>

    <br>
  
<div class="input-group">
    <!-- <span class="input-group-addon">-->
        <input type="radio" aria-label="..." >
     <!-- </span>--> &nbsp&nbsp&nbsp&nbsp&nbsp
      <label>This is my secure acount.</label>
      <!--<input type="text" class="form-control" aria-label="..." placeholder="This is my secure acount.">-->
    </div><!-- /input-group -->
<br>
  
<center> <button type="submit" class="btn btn-success" >Submit</button></center>


</div>



<div class="col-md-3">
<img src="3.jpg">
<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="3.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
   </div>

  <!-- Controls -->
 <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>-->
</div>
</div>
<br>
<div class="container">
<div class="jumbotron">
 <h3> This is Private site.Please sign in only company users. </h3>
  <p>You can not sign in into your account?  </p>
  <p><a align="right" class="btn btn-primary btn-lg" href="#" role="button">More Details?</a></p>
</div>
</div>
<br>
<div class="container">
<nav class="navbar navbar-default">
<div class="col-md-8">
</div>
<div class="col-md-4"
  <div class="container-fluid">
  <h3>Please visit again
  <br>
   <span class="label label-default">Thank you!</span></h3>
    <!-- Brand and toggle get grouped for better mobile display -->
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
</form>
</body>
</html>