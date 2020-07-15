<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="carti";
	
	$con=mysqli_connect($host, $user, $pass, $db) or die("Serverul nu functioneaza");
	mysqli_select_db($con,$db) or die("Nu exista baza de date!");
	

?>