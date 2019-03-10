<?php 
//admin login class
require_once "config.php";
require_once "Database.php";
require_once "Helpers.php";
require_once "Session.php";

 class AdminLogin{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function userLogin($usersEmail, $password){
 		$usersEmail = $this->format->validation($usersEmail);
 		$password = $this->format->validation($password);

 		$usersEmail = mysqli_real_escape_string($this->db->link, $usersEmail);
 		$password = mysqli_real_escape_string($this->db->link, $password);
 		if (empty($usersEmail) or empty($password)) {
 			$msg = "<div class='text-center alert alert-danger'><strong>Error! </strong>Usename and Password is empty!</div>";
 			return $msg;
 		}
 		else{
 			$password = md5($password);
 			$query = "SELECT * FROM admin_users WHERE usersEmail = '$usersEmail' AND usersPassword = '$password' LIMIT 1";
 			$result = $this->db->readData($query);
 			if ($result) {
 				$value = $result->fetch_assoc();
 				Session::set("login", true);
 				Session::set('usersId', $value["usersId"]);
 				Session::set('usersName', $value["usersName"]);
 				Session::set('usersEmail', $value["usersEmail"]);
 				header("Location: index.php");
 			}
 			else{
 				$msg = "<div class='text-center alert alert-danger'><strong>Error! </strong> User or Password Not match!</div>";
 				return $msg;
 			}
 		}
 	}

 }

 ?>