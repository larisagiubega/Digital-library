<?php
include "connect.php";
session_start();

$num_utiliz=$_SESSION['Nume'];
$nr_ID=$_SESSION['ID'];

if($nr_ID)
{
$qcarte = "SELECT * FROM imprumutat WHERE Nume_user='$num_utiliz'";
$rcarte =mysqli_query($con,$qcarte);
$fcarte= mysqli_fetch_assoc($rcarte);

$nume=$fcarte['Nume_aut'];
$titlu=$fcarte['Nume_cart'];
$nat=$fcarte['Nationalitate_aut'];
$init=$fcarte['Initiala_aut'];
$ed=$fcarte['Editura'];



$insert="INSERT INTO carti(Nume_aut,Nume_cart,Nationalitate_aut, Initiala_aut, Editura) VALUES ('$nume','$titlu','$nat', '$init', '$ed')";
$rezins=mysqli_query($con,$insert);
	
$sterge= "DELETE FROM imprumutat WHERE Nume_user='$num_utiliz'";
$rezsterge = mysqli_query($con,$sterge);

$update = "UPDATE useri SET Carte_imprumut='0' WHERE Nume='$num_utiliz'";
$rezupdate = mysqli_query($con,$update);

header('Location:afisareUtiliz.php');
}

else
header('Location:returneazaCarteForm.php');

?>
	