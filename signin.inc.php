<?php
session_start();
include "connect.inc.php";

	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$md5_password = md5($password);
		if(!empty($email) && !empty($password)){

			$query ="SELECT email FROM user WHERE email='$email' and password='$md5_password'";
				if($query_run = mysqli_query($conn, $query)){
				$query_num_row = mysqli_num_rows($query_run);
					if($query_num_row==1){
						$query_raw = mysqli_fetch_assoc($query_run);
						$_SESSION['uname'] = $query_raw['email'];
						header('Location:home.php');
							exit();

					}else{
						echo "You entered username or password is wrong.";
					}
				}

		}else{
			echo "Fill Password or Username.";
		}
	}

?>