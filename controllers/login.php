<?php
	session_start();
 
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		$query = mysqli_query($conn, "SELECT * FROM 'login' WHERE 'username'='$username' && 'password'='$password'");
		$fetch=mysqli_fetch_array($query);
		$count=mysqli_num_rows($query);
 
		if($count > 0){
			$_SESSION['user_id']=$fetch['user_id'];
			header('location: home.php');
		}else{
			echo "<div class='alert alert-danger'>Invalid username or password</div>";
		}
	}
	
	include "views/login.view.php";
?>