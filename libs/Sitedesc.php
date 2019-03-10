<?php
/*Sitedesc class*/

 class Sitedesc{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function uploadDesc($data, $files){

 		$phoneNumber = $this->format->validation($data['phoneNumber']);
 		$inistEmail = $this->format->validation($data['email']);

 		$lite_logo = $files['site_logo']['name'];
 		$image_type = array('jpg','png', 'gif','jpeg' );
        $file_size  = $files['site_logo']['size'];
        $tmp_name   = $files['site_logo']['tmp_name'];

        $div         = explode('.', $lite_logo);
        $file_ext    = strtolower(end($div));
        $logo_name = "logo".".".$file_ext;
        $upload_image= "images/logo/".$logo_name;

 		$phoneNumber = mysqli_real_escape_string($this->db->link, $phoneNumber);
 		$inistEmail = mysqli_real_escape_string($this->db->link, $inistEmail);
 		if (empty($phoneNumber) or empty($inistEmail)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{
 			
            if (filter_var($inistEmail, FILTER_VALIDATE_EMAIL) === false) {
            	$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Enter Valid Email address!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        		return $msg;
            }
            else{
            	if (empty($lite_logo)) {

            		$query = "UPDATE sitedesc_table SET phoneNumber = '$phoneNumber', inistEmail = '$inistEmail' WHERE id = '1'";
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
            	else{
            		if (in_array($file_ext, $image_type) === false) {
		                $msg ="<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Please select any image file:-".implode(', ',$image_type)."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		                return $msg;
		            }
		            else{
	            		move_uploaded_file($tmp_name, $upload_image);
			 			$query = "UPDATE sitedesc_table SET  siteLogo = '$upload_image', phoneNumber = '$phoneNumber', inistEmail = '$inistEmail'";
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
            }			
 		}
 	}


 	public function getDescriptionData(){
 		$query = "SELECT * FROM sitedesc_table WHERE id = '1'";
        $result = $this->db->readData($query);
        return $result;
 	}

 }

 ?>