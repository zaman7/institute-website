<?php


class Contacts{
	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function sendMessages($data){

 		$name = $this->format->validation($data['name']);
 		$email = $this->format->validation($data['email']);
 		$subject = $this->format->validation($data['subject']);
	 	$messages = $this->format->validation($data['messages']);

	 	$name = mysqli_real_escape_string($this->db->link, $name);
	    $email = mysqli_real_escape_string($this->db->link, $email);
	    $subject = mysqli_real_escape_string($this->db->link, $subject);
	    $messages = mysqli_real_escape_string($this->db->link, $messages);


	    if (empty($name) OR empty($email) OR empty($subject) OR empty($messages)) {
    		echo "<div class='alert alert-danger'>Please Fill Out All Field!</div>";
	    }
	    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    	echo "<div class='alert alert-danger'>Invalid email address!</div>";
	    }
	    else{
	    	$query= "INSERT INTO contacts_table(name, email, subject, messages) VALUES('$name','$email', '$subject', '$messages')";
	        $sendMsg = $this->db->insertData($query);
	        if ($sendMsg) {
	            echo "<div class='alert alert-success'>Message send Successfully</div>";
	        }else{
	            echo "<div class='alert alert-danger'>Message Not send.....!</div>";
	        }
	    }
    }


    public function getAllMessages(){
    	$query = "SELECT * FROM contacts_table WHERE status = 0";
        $result = $this->db->readData($query);
        return $result;
    }
}

?>