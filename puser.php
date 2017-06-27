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