<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset=utf-8>
<title>Biblioteca județeană</title>

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

	.button2 {
	background-color: #4F3810;
	border: none;
	color: #FFEE76;
	padding: 10px 37px;
	text-align: center;
	font-size: 15px;
	cursor: pointer;
	position: relative;
	margin: -10px -199px;
    float: right;
	top: 65px;
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
</style>

</head>


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

<button onclick="window.location.href = 'loginAdmin.html';" class="button1">Logare ca administrator</button>
<button onclick="window.location.href = 'loginUtiliz.html';" class="button2">Logare ca utilizator</button>


<br><br><br>

<p class="quote" style="text-align: center"> Bun venit în lumea cărților!</p>

<hr>
<h1 style="text-align:center; font-family: Impact, Charcoal, sans-serif; font-size: 50px; color:#4F3810"> Biblioteca Județeană</h1>
<hr>

<ul style="width:100%">

  <li><a href="index.html">Acasă</a></li>
  <li><a href="afisare.php">Catalog online</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="despre.html">Despre</a></li>
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
</div>

 
<h4 align="center" style="color:#4F3810">
	<details>
		<summary>Copyright © 2020</summary>
		<p> - Biblioteca județeană, Giubega Larisa-Nicoleta</p>
	</details>
</h4>


</body>
</html>