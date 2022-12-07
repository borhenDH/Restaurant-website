<?php
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"projet");
extract($_POST);
$nom=$_POST['firstname'];
$prenom=$_POST['lastname'];
$email=$_POST['email'];
$mdp=$_POST['password'];

$rq1="select * from client where email='$email'";
$rt1=mysqli_query($cx,$rq1) or die ("erreur selction");
if(mysqli_num_rows($rt1)==0){
	$rq2="insert into `client` values('$nom','$prenom','$email','$mdp');";
	$rt2= mysqli_query($cx,$rq2) or die ("erreur insertion");
	if($rt2){echo("inscription réalisée avec succès");}
	header('Location: http://localhost/ordering.html');
}else{
	echo("client déjà inscrit");
}
exit();

?>