<?php
include "connect.php";

session_start();

$sql="SELECT * FROM carti";
$rez=mysqli_query($con,$sql);

$num_utiliz=$_SESSION['Nume'];

$nr=$_POST['nr'];

$i=1;
$ok=0;
$idimprumut=$_POST['nr'];


$queryCarte = "SELECT Carte_imprumut FROM useri WHERE Nume='$num_utiliz'";
$resultCarte = mysqli_query($con,$queryCarte);
$FetchCarte=mysqli_fetch_assoc($resultCarte);
$nr_Carte=$FetchCarte['Carte_imprumut'];

if($nr_Carte==0){		
	while($row=mysqli_fetch_assoc($rez))
{ 
	if($i==$idimprumut)
	{	$ok=1;
			
		$id=$row['ID'];
		$nume=$row['Nume_aut'];
		$titlu=$row['Nume_cart'];
		$nat=$row['Nationalitate_aut'];
		$init=$row['Initiala_aut'];
		$ed=$row['Editura'];
		
		$queryID = "SELECT ID FROM carti WHERE Nume_aut='$nume' && Nume_cart='$titlu' &&  Editura='$ed'";
		$resultID = mysqli_query($con,$queryID);
		$FetchID=mysqli_fetch_assoc($resultID);
		$nr_ID=$FetchID['ID'];
		
		$queryInt = "UPDATE useri SET Carte_imprumut='$nr_ID' WHERE Nume='$num_utiliz'";
		$resultInt = mysqli_query($con,$queryInt);
		
		$queryInsert = "INSERT INTO imprumutat(Nume_aut, Nume_cart, Nationalitate_aut, Initiala_aut, Editura, Nume_user)
		VALUES ('$nume', '$titlu', '$nat', '$init', '$ed', '$num_utiliz')";
		$resultInsert = mysqli_query($con,$queryInsert);
		
		$querySterge = "DELETE FROM carti WHERE Nume_aut='$nume' && Nume_cart='$titlu' &&  Editura='$ed'";
		$resultSterge = mysqli_query($con,$querySterge);

	}
	$i++;}
	if($ok==1)
		header('Location:afisareUtiliz.php');
	else header('Location:imprumutaCarteForm.php'); 
		


}
	else header('Location:gataImprumut.php');

	
?>
