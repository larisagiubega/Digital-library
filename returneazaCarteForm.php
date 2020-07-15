<!DOCTYPE html>
<html lang="ro">
<head>

<title>Returnați carte</title>
<meta charset="UTF-8">

<style>

	body {
	background-color: #FFFFE0;
	}

	p.quote {
	font-family: Impact, Charcoal, sans-serif;
    right:45%;
	color: #4F3810;
	} 

	.button1 {
	background-color: #4F3810;
	border: none;
	color: #FFEE76;
	padding: 10px 20px;
	text-align: center;
	font-size: 15px;
	cursor: pointer;
	position: relative;
    float: right;
	top: 10px;
	}

	.button1 {
	background-color: #4F3810;
	border: none;
	color: #FFEE76;
	padding: 15px 45px;
	text-align: center;
	font-size: 15px;
	cursor: pointer;
	position: relative;
    float: right;
	top: 10px;
	margin: 0px 20px;
	}

	.button2 {
	background-color: #4F3810;
	border: none;
	color: #FFEE76;
	padding: 6px 15px;
	text-align: center;
	font-size: 15px;
	cursor: pointer;
	}


	ul {
    list-style-type: none;
    padding: 0.15%;
    overflow: hidden;
    background-color: #4F3810;
	}

	li {
    float: left;
	}

	li a {
    display: block;
    color: #FFEE76;
    text-align: center;
    padding: 10px 130px;
    text-decoration: none;
	}

	li a:hover {
    background-color:#553E08;
	}

	.icons {
	float: right;
	}
	
	.ad {
	width: 110%;
	}
	
	hr {
	border-color:#FFEE76;
	}
	
	td, th {
	padding-left: 85px;
	padding-right: 85px;
	font-family: Impact, Charcoal, sans-serif;
	font-size: 13px ;}
	
	table {
	border-collapse: collapse;
	color: #4F3810;}

	table, td, th {
	border: 1px solid black;
	}
	
	div {
	font-family: Impact, Charcoal, sans-serif;
    color: #4F3810;
	text-align: center;}
</style>	

<body>
<p class="quote"> &emsp;&emsp;&emsp;&emsp;&emsp; <q>În cărți există mai multe comori decât în toate cufărele piraților de pe Insula Comorii.</q>– Walt Disney</p>


<a href="https://www.facebook.com">
  <img  class="icons" style="margin: -41px 125px" src="Facebook.png" alt="To Facebook">
</a>

<a href="https://www.twitter.com">
   <img class="icons" style="margin: -41px 70px" src="Twitter.png" alt="To Twitter">
</a>

<a href="https://www.instagram.com/">
  <img class="icons" style="margin: -40px 17px" src="Instagram.png" alt="To Instagram">
</a>

<button onclick="window.location.href = 'index.html';" class="button1">Log out</button>

<br><br><br>

<p class="quote" style="text-align: center"> Bun venit în lumea cărților,<u>
<?php
   session_start();
   if (isset($_SESSION['Nume']))
      echo $_SESSION['Nume'];

?></u>
!</p>

<hr>
<h1 style="text-align:center; font-family: Impact, Charcoal, sans-serif; font-size: 50px; color:#4F3810"> Biblioteca Județeană</h1>
<hr>

<ul>

  <li><a href="indexUtiliz.php">Acasă</a></li>
  <li><a href="afisareUtiliz.php">Catalog online</a></li>
  <li><a href="contactUtiliz.php">Contact</a></li>
  <li><a href="despreUtiliz.php">Despre</a></li>
</ul>

<hr>
<br><br>

<div>
<?php
include "connect.php";
$num_utiliz=$_SESSION['Nume'];

$queryID = "SELECT Carte_imprumut FROM useri WHERE Nume='$num_utiliz'";
$resultID = mysqli_query($con,$queryID);
$FetchID=mysqli_fetch_assoc($resultID);
$nr_ID=$FetchID['Carte_imprumut'];
$_SESSION['ID'] = $nr_ID;

if($nr_ID){
echo $num_utiliz;
echo ', ați împrumutat cartea cu următoarele atribute:';
}
else echo 'Nu ați împrumutat încă nicio carte.';
?>

</div>

<br>

<table>
		<tr>
			<th>Nume autor</th>
			<th>Titlu carte</th>
			<th>Nationalitate autor</th>
			<th>Initiala nume autor</th>
			<th>Editura</th>
		</tr>
		
<?php
if($nr_ID){
$queryCarte = "SELECT * FROM imprumutat WHERE Nume_user='$num_utiliz'";
$resultCarte = mysqli_query($con,$queryCarte);
$FetchCarte=mysqli_fetch_assoc($resultCarte);

$nume=$FetchCarte['Nume_aut'];
$titlu=$FetchCarte['Nume_cart'];
$nat=$FetchCarte['Nationalitate_aut'];
$init=$FetchCarte['Initiala_aut'];
$ed=$FetchCarte['Editura'];

$nat1="SELECT Nat_aut FROM nationalitate WHERE ID='$nat'";
$querNat=mysqli_query($con,$nat1);
$rowNat=mysqli_fetch_assoc($querNat);
$nat=$rowNat['Nat_aut'];
				
$init1="SELECT Litera FROM initiala WHERE ID='$init'";
$querInit=mysqli_query($con,$init1);
$rowInit=mysqli_fetch_assoc($querInit);
$init=$rowInit['Litera'];

$ed1="SELECT Nume_ed FROM editura WHERE ID='$ed'";
$querEdit=mysqli_query($con,$ed1);
$rowEd=mysqli_fetch_assoc($querEdit);
$ed=$rowEd['Nume_ed'];


echo"<tr";
echo">
<td>".$nume."</td>
<td>".$titlu."</td>
<td>".$nat."</td>
<td>".$init."</td>
<td>".$ed."</td>
</tr>";
}
else 
{
echo"<tr";
echo">
<td>".'-'."</td>
<td>".'-'."</td>
<td>".'-'."</td>
<td>".'-'."</td>
<td>".'-'."</td>
</tr>";
}
?>

</table>
<br>
	
<br><br>
<div>
<button onclick="window.location.href = 'imprumutaCarteForm.php';" name="imprumut" class="button2">Împrumutați carte</button>
<button onclick="window.location.href = 'returneazaCarte.php';" name="return" class="button2">Returnați carte</button>
</div>
<br><br>
<hr>	

<h4 align="center" style="color:#4F3810">
	<details>
		<summary>Copyright © 2020</summary>
		<p> - Bibliotecă județeană, Giubega Larisa-Nicoleta</p>
	</details>
</h4>

</body>

</html>