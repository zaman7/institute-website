<?php 


/**
 * 
 */
class Stats {
	
	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function insertStats($data){
 		$stat_name = $this->format->validation($data['stat_name']);
        $stat_icon = $this->format->validation($data['stat_icon']);
        $stat_amount = $this->format->validation($data['stat_amount']);


 		$stat_name = mysqli_real_escape_string($this->db->link, $stat_name);
        $stat_icon = mysqli_real_escape_string($this->db->link, $stat_icon);
        $stat_amount = mysqli_real_escape_string($this->db->link, $stat_amount);


 		if (empty($stat_name) OR empty($stat_icon) OR empty($stat_amount)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{
	   		$query= "INSERT INTO stats_taable (stat_name, stat_icon, stat_amount) VALUES('$stat_name', '$stat_icon', '$stat_amount')";
 			$result = $this->db->insertData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Stats Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Stats Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
    	}
    }


    public function getAllStats(){
        $query = "SELECT * FROM stats_taable";
        $result = $this->db->readData($query);
        return $result;
    }

    public function getStats(){
        $query = "SELECT * FROM stats_taable ORDER BY id DESC LIMIT 4";
        $result = $this->db->readData($query);
        return $result;
    }
}







?>