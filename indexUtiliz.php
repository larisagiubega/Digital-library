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
	width: 110%;
	}
	
hr {
	border-color:#FFEE76;
	}
	
	h4 {
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

<img class="ad" src="https://em.wattpad.com/36f299941a2b1a6d9f68f7ec4ac39608afa4dc34/68747470733a2f2f692e70696e696d672e636f6d2f6f726967696e616c732f65302f35352f34362f65303535343632353065383363393833306632333539653532386236333739612e6a7067?s=fit&h=360&w=360&q=80" 
alt="Book aesthetic">
 
<h4>
	<details>
		<summary>Copyright © 2020</summary>
		<p> - Biblioteca județeană, Giubega Larisa-Nicoleta</p>
	</details>
</h4>

</body>



</html>

