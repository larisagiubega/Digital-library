<?php

 $nume=$_POST['numeUtiliz'];
 $parola=$_POST['parolaUtiliz'];
 $parolahash=password_hash($parola, PASSWORD_DEFAULT);
 include "connect.php";
 $sql="INSERT INTO useri(Nume,Parola) VALUES ('$nume','$parolahash')";
 //echo $sql;
 //die();
 $rez=mysqli_query($con, $sql);
 if($rez)
 header("Location:loginUtiliz.html");
	else
header("Location:utilizNou.html");
?>