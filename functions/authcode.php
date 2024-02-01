<?php
    session_start();   
	include('../config/dbcon.php');
	include('myFunction.php');

// ***************** REGISTERATION FORM ********************
	if(isset($_POST['register_btn'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		// *********** CHECK IF EMAIL ALREADY REGISTERED **********
		$select_query = "SELECT `email` FROM `users` WHERE `email` = '$email' ";
		$select_query_run = mysqli_query($conn, $select_query);

		if(mysqli_num_rows($select_query_run) > 0){
			redirect('../register.php', 'Email already registered');
		}else{
			if($password == $cpassword){
			// ************ INSERT USER DATA **********
				$insert_query = "INSERT INTO `users`(`name`, `email`, `phone`, `password`) VALUES('$name', '$email', '$phone', '$password')";
				$inser_query_run = mysqli_query($conn, $insert_query);

				if($inser_query_run){
					redirect('../login.php', 'Registered Successfully');

					// $_SESSION['message'] = "Registered Successfully";
					// header('Location: ../login.php');
				}else{
					redirect('../register.php', 'Something went wrong!');
				}

			}else{
				redirect('../register.php', 'Passwords do not match');
			}
		}
		
	}

	// ***************** LOGIN FORM ********************
	else if(isset($_POST['login_btn'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$login_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
		$login_query_run = mysqli_query($conn, $login_query);

		if(mysqli_num_rows($login_query_run) > 0){
			$_SESSION['auth'] = true;

			$userdata = mysqli_fetch_array($login_query_run);
			$username = $userdata['name'];
			$useremail = $userdata['email'];
			$role_as = $userdata['role_as'];

			$_SESSION['auth_user'] = [
				'name' => $username,
				'email' => $useremail
			];

			$_SESSION['role_as'] = $role_as;

			if($role_as == 1){
				redirect('../admin/index.php', 'Welcome to dashboard');
			}else{
				redirect('../index.php', 'Logged In Successfully');
			}

		}else{
			redirect('../login.php', 'Invalid Credentials');
		}
	}
?>