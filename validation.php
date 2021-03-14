
<?php

session_start();

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'session');


	$username = $_POST['username'];
	$password = $_POST['password'];
	$admin = $_POST['Login_as_admin'];
	echo $admin;

	// echo $username;
	// echo $password;
	$check = "select  name from signin where name='$username' ";
	// $resultcheck = mysqli_query($con,$check);	
	 $rowcount = mysqli_num_rows(mysqli_query($con,$check));
			if($rowcount){
			
				$_SESSION['username']= $name;
				header('location:home.php');
				
			}	else{
				header('location:login.html');

			}

?>
