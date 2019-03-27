<?php
/**
 * Created by PhpStorm.
 * User: ZamaN
 * Date: 3/9/2019
 * Time: 1:44 PM
 */

class Galleries{
    private $db;
    private $format;
    public function __construct(){
        $this->db = new Database();
        $this->format = new Helpers();
    }

    public function addGalleryImage($data, $files){

        $gallery_tag = $data['gallery_tag'];

        $gallery_images = $files['gallery_images']['name'];
        $image_type = array('jpg','png', 'gif','jpeg' );
        $file_size  = $files['gallery_images']['size'];
        $tmp_name   = $files['gallery_images']['tmp_name'];

        $div         = explode('.', $gallery_images);
        $file_ext    = strtolower(end($div));
        $unique_name = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image= "images/galeries/".$unique_name;

        if (empty($gallery_images) OR empty($gallery_tag)) {
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
                $query= "INSERT INTO galeries_table (gallery_tag, gallery_images) VALUES('$gallery_tag', '$upload_image') ";
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
    }


    public function getGalleryImages(){
        $query = "SELECT * FROM galeries_table";
        $result = $this->db->readData($query);
        return $result;
    }


    
}