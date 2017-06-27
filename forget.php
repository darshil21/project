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
<form  method="post" action="emaildemo.php" enctype="multipart/form-Data">
<div class="container">

</div>
<div class="container">

<div class="col-md-9">

<!--<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Name:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>-->
<br>
<div class="input-group">
 <span class="input-group-addon" id="basic-addon2">Email-Id:</span>
  <input type="email" name="txtid" class="form-control" placeholder="Recipient's userId" aria-describedby="basic-addon2">
 
</div>


    <br>
  
<!-- /input-group -->
<br>
  
<center> <button type="submit" class="btn btn-lg btn-success" >submit</button></center><br><br>




</div>
<br>
</div>
<br>

</form>

</body>
</html>