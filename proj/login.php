<?php
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"projet");
extract($_POST);

$email=$_POST['email'];

$mdp=$_POST['password'];

$rq1="select * from client where `email`='$email' AND `password`='$mdp';";
$rt1=mysqli_query($cx,$rq1) or die ("verifier mot de pass");
if(mysqli_num_rows($rt1)==0)
{
	
    header('Location: http://localhost/failed.html');

}
else{
    echo('welcome');
    header('Location: http://localhost/ordering.html');

}
exit()
?>