<?php
/**
 * Created by PhpStorm.
 * User: ZamaN
 * Date: 3/9/2019
 * Time: 1:44 PM
 */

class LatestNews{
    private $db;
    private $format;
    public function __construct(){
        $this->db = new Database();
        $this->format = new Helpers();
    }

    public function insertLatestNews($data){
 		$news_title = $this->format->validation($data['news_title']);
        $news_link = $this->format->validation($data['news_link']);

 		$news_title = mysqli_real_escape_string($this->db->link, $news_title);
 		$news_link = mysqli_real_escape_string($this->db->link, $news_link);

 		if (empty($news_title) OR empty($news_link)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{

	   		$query= "INSERT INTO latest_news_table (news_title, news_link) VALUES('$news_title', '$news_link') ";
 			$result = $this->db->insertData($query);
 			if ($result) {
                $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Latest News Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{
                $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Latest News Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
    	}
    }


    public function getLatestNews(){
 		$query = "SELECT * FROM latest_news_table ORDER BY id DESC LIMIT 5";
        $result = $this->db->readData($query);
        return $result;
 	}

    public function deleteNews($del_news){
 		$query = "DELETE FROM latest_news_table WHERE id = $del_news";
        $result = $this->db->deleteData($query);
        return $result;
 	}
}