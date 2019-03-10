<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $addSlider = $slider->addSliderImage($_FILES);
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
                                <h2>Add Slider Image</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($addSlider)) {
                                        echo $addSlider;
                                    } ?>
                                    <form action="#" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label for="file">Image:</label>
                                            <input type="file" name="slider_image" id="file">
                                            <small>Please Select 1400X580px Images</small>
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