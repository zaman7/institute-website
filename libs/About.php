<?php
/*About class*/

 class About{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function updateAbout($data){

 		$about_title = $this->format->validation($data['about_title']);
 		$description = $this->format->validation($data['description']);

 		$about_title = mysqli_real_escape_string($this->db->link, $about_title);
 		$description = mysqli_real_escape_string($this->db->link, $description);
 		if (empty($about_title) or empty($description)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{

    		$query = "UPDATE about_table SET about_title = '$about_title', description = '$description' WHERE id = '1'";
 			$result = $this->db->updateData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Uploaded Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Not Uploaded.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }			
 		}
 	}

 	public function getAboutContent(){
 		$query = "SELECT * FROM about_table WHERE id = '1'";
        $result = $this->db->readData($query);
        return $result;
 	}
 }

 ?>