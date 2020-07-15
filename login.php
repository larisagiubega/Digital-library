<?php
	
  	include "connect.php";
	
	session_start();
   
    if(isset($_POST['numeAdmin'])){
		$nume=$_POST['numeAdmin'];
		$parola=$_POST['parolaAdmin'];
		
		$select =" select * from useri where Nume = '$nume'";
        $user= " select Nume from useri where Nume= '$nume'"; 
            
        $result = mysqli_query($con,$select);    
                
        $username= mysqli_query($con,$user);
                     
        $i=1;
		while( $userfinal=mysqli_fetch_array($username))
		{
		    $_SESSION['Nume'] =$userfinal['Nume']; 
		} 
                
                
        $num = mysqli_num_rows($result);
        if($num==1 && $nume=='admin' && $parola=='admin'){
            header('Location:indexAdmin.html');
        }
        else{
            header('Location:loginAdmin.html');
        }
    }
			
	if(isset($_POST['numeUtiliz'])){
		$nume=$_POST['numeUtiliz'];
		$parola=$_POST['parolaUtiliz'];
		
		$select =" select * from useri where Nume = '$nume'"; 
        $user= " select Nume from useri where Nume= '$nume'"; 
            
        $result = mysqli_query($con,$select);    
                
		$username= mysqli_query($con,$user);
                     
					 
		$result1="SELECT * FROM useri where Nume='$nume'";
		$parolasecq=mysqli_query($con,$result1);
		$fetchparola=mysqli_fetch_assoc($parolasecq);
		$parolahash=$fetchparola['Parola'];
		
		if(password_verify($parola, $parolahash))
		{	
			
			$i=1;
			while( $userfinal=mysqli_fetch_array($username))
			{
				$_SESSION['Nume'] =$userfinal['Nume']; 
			} 
                
                
			$num = mysqli_num_rows($result);
			if($num==1 || $nume!='admin'){
				header('Location:indexUtiliz.php');
			}
			
		}
		else{
				header('Location:loginUtiliz.html');
			}
   	}
	
		
?>