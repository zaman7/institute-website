<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $upAobut = $about->updateAbout($_POST);
    }
    $getAbout = $about->getAboutContent();

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
                                <h2>Add Latest News</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($upAobut)) {
                                        echo $upAobut;
                                    } ?>
                                    <?php if (isset($getAbout)) {
                                        $aboutValue = $getAbout->fetch_assoc();
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" name="about_title" value="<?php echo $aboutValue['about_title'] ?>" id="title" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Details:</label>
                                            <textarea name="description" rows="12" id="category" class="form-control"><?php echo $aboutValue['description'] ?></textarea>
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Update" />
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