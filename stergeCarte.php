<?php
	include "connect.php";
	$sql="SELECT * FROM carti";
	
	$rez=mysqli_query ($con,$sql);

	$i=1;
	$ok=0;
	$idsters=$_POST['nr'];
	while($row=mysqli_fetch_assoc($rez))
	{ 
		if($i==$idsters)
		{	$ok=1;
			$nume=$row['Nume_aut'];
			$titlu=$row['Nume_cart'];
			$ed=$row['Editura'];
			$query = "DELETE FROM carti WHERE Nume_aut='$nume' && Nume_cart='$titlu' &&  Editura='$ed'";
			$result = mysqli_query($con,$query);
		}

		$i++;
	}
	if($ok==1)
	header('Location:afisareAdmin.php');
	else 
	header('Location:stergeCarteForm.php');
?>	
