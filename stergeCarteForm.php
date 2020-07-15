<!DOCTYPE html>
<html lang="ro">
<head>

<title>Stergeți carte</title>
<meta charset="UTF-8">

<style>

	body {
	background-color: #FFFFE0;
	}
	
	label {
    display: block;
	color: #4F3810;	
	font-family: Impact, Charcoal, sans-serif;
	}
	
	hr {
	border-color:#FFEE76;
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
	
	p.quote {
	font-family: Impact, Charcoal, sans-serif;
    right:45%;
	color: #4F3810;
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

	
	.icons {
	float: right;
	}
	
	.ad {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 40%;
	}

	input,textarea {
	background-color: #4F3810;
	color: #FFEE76;
	}

	td, th {
	padding-left: 65px;
	padding-right: 65px;
	font-family: Impact, Charcoal, sans-serif;
	font-size: 13px ;}
	
	table {
	border-collapse: collapse;
	color: #4F3810; 
	padding-left: 30px;}

	table, td, th {
	border: 1px solid black;
	}
		
	fieldset{
	border-color: #FFEE76;
	}
	
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

<p class="quote" style="text-align: center"> Bun venit în lumea cărților, <u>admin</u>!</p>



<hr>
<h1 style="text-align:center; font-family: Impact, Charcoal, sans-serif; font-size: 50px; color:#4F3810"> Biblioteca Județeană</h1>
<hr>

<ul>

  <li><a href="indexAdmin.html">Acasă</a></li>
  <li><a href="afisareAdmin.php">Catalog online</a></li>
  <li><a href="contactAdmin.html">Contact</a></li>
  <li><a href="despreAdmin.html">Despre</a></li>
</ul>
<?php
	include "connect.php";
	$sql="SELECT * FROM carti";
	
	$rez=mysqli_query ($con,$sql);
?>
<table >
		<tr>
			<th>Nr. cărții</th>
			<th>Nume autor</th>
			<th>Titlu carte</th>
			<th>Nationalitate autor</th>
			<th>Initiala nume autor</th>
			<th>Editura</th>
		</tr>
		
		<hr>
		
			<?php
				$i=1;
				while($row=mysqli_fetch_assoc($rez))
				{
				$num=$row['Nume_aut'];
				$titl=$row['Nume_cart'];
				$nation=$row['Nationalitate_aut'];
				$lit=$row['Initiala_aut'];
				$edit=$row['Editura'];
				
				$nat="SELECT Nat_aut FROM nationalitate WHERE ID='$nation'";
				$querNat=mysqli_query($con,$nat);
				$rowNat=mysqli_fetch_assoc($querNat);
				
				$init="SELECT Litera FROM initiala WHERE ID='$lit'";
				$querInit=mysqli_query($con,$init);
				$rowInit=mysqli_fetch_assoc($querInit);
				
				$ed="SELECT Nume_ed FROM editura WHERE ID='$edit'";
				$querEdit=mysqli_query($con,$ed);
				$rowEd=mysqli_fetch_assoc($querEdit);
				
				
	
					echo"<tr";
						echo"><td>".$i."</td>
						<td>".$row['Nume_aut']."</td>
						<td>".$row['Nume_cart']."</td>
						<td>".$rowNat['Nat_aut']."</td>
						<td>".$rowInit['Litera']."</td>
						<td>".$rowEd['Nume_ed']."</td>
						</tr>";
					$i++;
					
				}
			?>	
</table>

<br>
<form action="stergeCarte.php" method="post" align="center">
	<fieldset>
		<legend style="color:#4F3810">Ce carte doriți să ștergeți?</legend>
		<label>Nr. cărții de șters:</label>
		<input type=number name=nr required=required min="1"><br><br>
  
  <br>
  <input type="submit" value="Trimite">

	</fieldset>
</form>

<h4 align="center" style="color:#4F3810">
	<details>
		<summary>Copyright © 2020</summary>
		<p> - Bibliotecă județeană, Giubega Larisa-Nicoleta</p>
	</details>
</h4>

</body>

</html>