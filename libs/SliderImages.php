<?php
/**
 * Created by PhpStorm.
 * User: ZamaN
 * Date: 3/9/2019
 * Time: 1:44 PM
 */

class SliderImages{
    private $db;
    private $format;
    public function __construct(){
        $this->db = new Database();
        $this->format = new Helpers();
    }

    public function addSliderImage($files){

        $sliderImage = $files['slider_image']['name'];
        $image_type = array('jpg','png', 'gif','jpeg' );
        $file_size  = $files['slider_image']['size'];
        $tmp_name   = $files['slider_image']['tmp_name'];

        $div         = explode('.', $sliderImage);
        $file_ext    = strtolower(end($div));
        $unique_name = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image= "images/slider/".$unique_name;

        if (empty($sliderImage)) {
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
                $query= "INSERT INTO sliders_table(slider_images) VALUES('$upload_image')";
                $proIns = $this->db->insertData($query);
                if ($proIns) {
                    $msg = "<div class='alert alert-success alert-dismissible' role='alert'><strong>Success! </strong>Images Uploaded Successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                    return $msg;
                }
                else{
                    $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Error! </strong>Images Not Uploaded.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                    return $msg;
                }
            }
        }
    }

    public function getSliderImages(){
        $query = "SELECT * FROM sliders_table ORDER BY id DESC LIMIT 5";
        $result = $this->db->readData($query);
        return $result;
    }

    public function deleteSliderImages($del_slider){

        $query = "SELECT * FROM sliders_table WHERE id = '$del_slider'";
        $getSImages = $this->db->readData($query);
        if ($getSImages) {
            while ($delImg = $getSImages->fetch_assoc()) {
                $unlinkImg = $delImg['slider_images'];
                if ($unlinkImg) {
                   unlink($unlinkImg);
                }
            }
        }
        $query = "DELETE FROM sliders_table WHERE id = $del_slider";
        $result = $this->db->deleteData($query);
        if($result){
            $msg = "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Success! </strong>Slider delete.....!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
            return $msg;
        }
    }
}