<?php
include "connect.php";
$nume=$_POST['numeAut'];
$titlu=$_POST['titlu'];
$nat=$_POST['nationalitate'];
$init=$_POST['init'];
$ed=$_POST['ed'];

$sql="SELECT * FROM nationalitate";
$rez=mysqli_query ($con,$sql);


$Idnat="SELECT ID FROM nationalitate where Nat_aut='$nat'";
$Nation=mysqli_query($con,$Idnat);
$FetchNat=mysqli_fetch_assoc($Nation);
$nr_nat=$FetchNat['ID'];

if(!$nr_nat){
$insert_nat="INSERT INTO nationalitate(Nat_aut) VALUES ('$nat')";
$rez_nat=mysqli_query ($con,$insert_nat);
$select_nat="SELECT ID FROM nationalitate where Nat_aut='$nat'";
$rez_natf=mysqli_query ($con,$select_nat);
$FetchNatf=mysqli_fetch_assoc($rez_natf);
$nr_nat=$FetchNatf['ID'];
}

$Idinit="SELECT ID FROM initiala where Litera='$init'";
$Init=mysqli_query($con,$Idinit);
$FetchLit=mysqli_fetch_assoc($Init);
$nr_init=$FetchLit['ID'];

$Idedit="SELECT ID FROM editura where Nume_ed='$ed'";
$Edit=mysqli_query($con,$Idedit);
$FetchEd=mysqli_fetch_assoc($Edit);
$nr_ed=$FetchEd['ID'];

if(!$nr_ed){
$insert_ed="INSERT INTO editura(Nume_ed) VALUES ('$ed')";
$rez_ed=mysqli_query ($con,$insert_ed);
$select_ed="SELECT ID FROM editura where Nume_ed='$ed'";
$rez_edf=mysqli_query ($con,$select_ed);
$FetchEdf=mysqli_fetch_assoc($rez_edf);
$nr_ed=$FetchEdf['ID'];
}


$insert="INSERT INTO carti(Nume_aut,Nume_cart,Nationalitate_aut, Initiala_aut, Editura) VALUES ('$nume','$titlu','$nr_nat', '$nr_init', '$nr_ed')";
$rezins=mysqli_query($con,$insert);

if(!$rezins)
{
	header('location:inserareCarteForm.html');
}
else{
	header('location:afisareAdmin.php');
}



?>