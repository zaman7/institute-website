<?php

 class BlogPosts{
 	private $db;
 	private $format;
 	public function __construct(){
 		$this->db = new Database();
 		$this->format = new Helpers();
 	}

 	public function insertBlogs($data, $files){
 		$posts_title = $this->format->validation($data['posts_title']);
        $posts_body = $this->format->validation($data['posts_body']);
        $author = $this->format->validation($data['author']);

 		$posts_title = mysqli_real_escape_string($this->db->link, $posts_title);
        $posts_body = mysqli_real_escape_string($this->db->link, $posts_body);
        $author = mysqli_real_escape_string($this->db->link, $author);

        $posts_image = $files['posts_image']['name'];
        $image_type = array('jpg','png', 'gif','jpeg' );
        $file_size  = $files['posts_image']['size'];
        $tmp_name   = $files['posts_image']['tmp_name'];

        $div         = explode('.', $posts_image);
        $file_ext    = strtolower(end($div));
        $unique_name = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image= "images/blogs/".$unique_name;

 		if (empty($posts_title) OR empty($posts_body) OR empty($author)) {
 			$msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Field must not be empty!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
        	return $msg;
 		}
 		else{
            if (in_array($file_ext, $image_type) === false) {
                $msg ="<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Please select any image file:-".implode(', ',$image_type)."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                return $msg;
            }
            else{

                move_uploaded_file($tmp_name, $upload_image);
    	   		$query= "INSERT INTO blog_posts_table (posts_title, posts_body, posts_image, author) VALUES('$posts_title', '$posts_body', '$upload_image', '$author')";
     			$result = $this->db->insertData($query);
     			if ($result) {
                    $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong> Blogs Update Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                    return $msg;
                }
                else{
                    $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong> Blogs Not Updated.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                    return $msg;
                }
            }
    	}
    }


 	public function getBlogsPosts(){
        $query = "SELECT * FROM blog_posts_table LIMIT 3";
        $result = $this->db->readData($query);
        return $result;
    }


 }

 ?>