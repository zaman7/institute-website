<?php

 class Notices{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function insertNotices($data){
 		$notices_title = $this->format->validation($data['notices_title']);
        $notices_desc = $this->format->validation($data['notices_desc']);


 		$notices_title = mysqli_real_escape_string($this->db->link, $notices_title);
 		$notices_desc = mysqli_real_escape_string($this->db->link, $notices_desc);


 		if (empty($notices_title) OR empty($notices_desc)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{
	   		$query= "INSERT INTO notices_table (notices_title, notices_desc) VALUES('$notices_title', '$notices_desc')";
 			$result = $this->db->insertData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Notices Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Notices Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
    	}
    }


 	public function getNoticesItems(){
 		$query = "SELECT * FROM notices_table";
        $result = $this->db->readData($query);
        return $result;
 	}

    public function deleteNotices($del_notices){
        $query = "DELETE FROM notices_table WHERE id = $del_notices";
        $result = $this->db->deleteData($query);
        return $result;
    }

 }

 ?>