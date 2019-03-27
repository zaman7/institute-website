<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $addGallery = $gallery->addGalleryImage($_POST, $_FILES);
    }

?>
    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 padding-right15">
                    <?php require_once 'includes/sidebar.php'; ?>
                </div>

                <div class="col-md-9 col-lg-10 col-sm-8 col-xs-12 padding-left15">
                    <div class="main-content">
                        <div class="display-flax-content">
                            <div class="section-title">
                                <h2>Add Gallery Image</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($addGallery)) {
                                        echo $addGallery;
                                    } ?>
                                    <form action="#" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="file">Gallery Tag:</label>
                                            <select name="gallery_tag" class="form-control">
                                                <option value="">--Select One--</option>
                                                <option value="campus">Campus</option>
                                                <option value="events">Events</option>
                                                <option value="photo">Photo Gallary</option>
                                                <option value="video">Video Gallary</option>  
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Image:</label>
                                            <input type="file" name="gallery_images" id="file">
                                            <small>Please Select Square size Images</small>
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Add Image" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>