<?php

	$nume = $_POST['fNume'];
	$pren = $_POST['fPrenume'];
	$email = $_POST['fEmail'];
	$mesaj = $_POST['fMesaj'];
	
	include "connect.php";
	
	$sql = "INSERT INTO feedback (Nume, Prenume, Email, Mesaj) VALUES ('$nume', '$pren', '$email', '$mesaj')";
	$rez = mysqli_query($con, $sql);
	
	if(!$rez) {
		echo "Mesajul tau nu a putut fi adaugat în baza de date!";
	}
	else {
		header("Location:contact.html");
	}

?>