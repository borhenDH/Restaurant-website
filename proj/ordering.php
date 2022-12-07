<?php
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"projet");
extract($_POST);
$plat=$_POST['plat'];
$sandwich=$_POST['sandwich'];
$comment=$_POST['comment'];
$cafe=$_POST['cafe'];
$jus=$_POST['jus'];
$payment=$_POST['payment'];
$rq1="insert into `order` values('$plat','$sandwich','$comment','$cafe','$jus','$payment');";
try {
    $rt1=mysqli_query($cx,$rq1) or die ("erreur insertion");
} catch (\Throwable $th) {
echo($th);
}
if($rt1){    header('Location: http://localhost/success.html')        ;}
exit();
?>