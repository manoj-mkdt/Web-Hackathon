
<?php

session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		#echo"connection";
	}

	mysqli_select_db($con,'session');


	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	// echo $username;
	// echo $password;

	// $check = "select * from quizregistration where name='$username' && password='$password' ";
	$check = "select  name from signin where name='$username' ";
	// $resultcheck = mysqli_query($con,$check);	
	 $rowcount = mysqli_num_rows(mysqli_query($con,$check));
			if($rowcount){
			
				
			}	else{

				$q = "insert into signin(name,email,password) values ('$username','$email','$password')"  ;
				// echo 'Connnection Successfull';
				$result = mysqli_query($con,$q);
				// i($result){
					header('location:login.php');
				// }
				
			}

?>
