<?php
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"projet");
extract($_POST);
$feedBack=$_POST['feedBack'];

$rq1="insert into `feedback` values('$feedBack');";
$rt1=mysqli_query($cx,$rq1) or die ("erreur insertion");
header('Location: http://localhost');
exit();
?>