<?php 
	require_once 'config.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$usersEmail = $_POST['email'];
		$password = $_POST['password'];

		$usersEmail = mysqli_real_escape_string($db_connect, $usersEmail);
 		$password = mysqli_real_escape_string($db_connect, $password);
 		if (empty($usersEmail) or empty($password)) {
 			echo "<div class='text-center alert alert-danger'><strong>Error! </strong>Usename and Password is empty!</div>";
 			exit();
 		}
 		else{
 			$password = md5($password);
 			$query = "SELECT * FROM admin_users WHERE usersEmail = '$usersEmail' AND usersPassword = '$password' LIMIT 1";
 			$result = mysqli_query($db_connect, $query);
 			if ($result->num_rows > 0) {
 				$value = mysqli_fetch_assoc($result);
 				$_SESSION["login"] = true;
 				$_SESSION["usersId"] = $value["usersId"];
 				$_SESSION["usersName"] = $value["usersName"];
 				$_SESSION["usersEmail"] = $value["usersEmail"];
 				header("Location: index.php");
 			}
 			else{
 				echo "<div class='text-center alert alert-danger'><strong>Error! </strong> User or Password Not match!</div>";
 				exit();
 			}
 		}
		
	}

?>