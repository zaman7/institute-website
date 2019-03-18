<?php

 class Subjects{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function insertSubjects($data){
 		$technology = $this->format->validation($data['technology']);
        $headOf_department = $this->format->validation($data['headOf_department']);
        $faculty_members = $this->format->validation($data['faculty_members']);
        $total_students = $this->format->validation($data['total_students']);
        $icon = $this->format->validation($data['icon']);


 		$technology = mysqli_real_escape_string($this->db->link, $technology);
        $headOf_department = mysqli_real_escape_string($this->db->link, $headOf_department);
        $faculty_members = mysqli_real_escape_string($this->db->link, $faculty_members);
        $total_students = mysqli_real_escape_string($this->db->link, $total_students);
 		$icon = mysqli_real_escape_string($this->db->link, $icon);


 		if (empty($technology) OR empty($headOf_department) OR empty($faculty_members) OR empty($total_students) OR empty($icon)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{
	   		$query= "INSERT INTO subjects_table (technology, headOf_department, faculty_members, total_students, icon) VALUES('$technology', '$headOf_department', '$faculty_members', '$total_students', '$icon')";
 			$result = $this->db->insertData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Technology Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Technology Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
    	}
    }


 	public function getTechnology(){
        $query = "SELECT * FROM subjects_table ORDER BY id DESC LIMIT 6";
        $result = $this->db->readData($query);
        return $result;
    }
    public function getSingleTechnology($id){
 		$query = "SELECT * FROM subjects_table WHERE id= $id";
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