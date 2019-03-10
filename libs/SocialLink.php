<?php

 class SocialLink{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function updateSocial($data){
 		$facebook = $this->format->validation($data['facebook']);
        $twitter = $this->format->validation($data['twitter']);
        $linkedin = $this->format->validation($data['linkedin']);
        $google = $this->format->validation($data['google']);


 		$facebook = mysqli_real_escape_string($this->db->link, $facebook);
 		$twitter = mysqli_real_escape_string($this->db->link, $twitter);
 		$linkedin = mysqli_real_escape_string($this->db->link, $linkedin);
 		$google = mysqli_real_escape_string($this->db->link, $google);


 		if (empty($facebook) OR empty($twitter) OR empty($linkedin) OR empty($google)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{

	   		$query= "UPDATE social_table SET facebook='$facebook', twitter='$twitter', linkedin='$linkedin', google='$google' WHERE id = '1'";
 			$result = $this->db->updateData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Social Link Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Social Link Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
    	}
    }


 	public function getSocialLink(){
 		$query = "SELECT * FROM social_table WHERE id = '1'";
        $result = $this->db->readData($query);
        return $result;
 	}

 }

 ?>