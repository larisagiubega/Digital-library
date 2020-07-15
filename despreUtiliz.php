	<!DOCTYPE html>

	<html lang="ro">

	<head>
	 
	<title>Biblioteca județeană</title>
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
	padding: 15px 45px;
	text-align: center;
	font-size: 15px;
	cursor: pointer;
	position: relative;
    float: right;
	top: 10px;
	margin: 0px 20px;
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
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 40%;
		}
		
	hr {
		border-color:#FFEE76;
		}
		
	p {
		color:#4F3810;	
		font-family: Impact, Charcoal, sans-serif;
		}
		
	h1,h4 {
		text-align:center;
		color:#4F3810;
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


	<br><br><br>

	<p style="padding-left: 30px"> Conform remarcabilului Mihai Eminescu, trebuie să citești deoarece "numai citind mereu,
	 creierul tău va deveni un laborator nesfârşit de idei şi imaginaţii."</p>
	<p style="padding-left: 30px"> Biblioteca județeană este o sursă principală de informații și nu doar: întâlniți aici personalități inedite și povești de neprețuit.</p>
	 
	<br><br><br><br><br><br><br><br>

	 
	<h4>
		<details>
			<summary>Copyright © 2020</summary>
			<p> - Biblioteca județeană, Giubega Larisa-Nicoleta</p>
		</details>
	</h4>

	</body>



	</html>

