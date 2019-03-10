<?php require_once 'includes/header.php'; ?>
<?php      
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $upDesc = $desc->uploadDesc($_POST, $_FILES);
    }
    $getDesc = $desc->getDescriptionData();

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
                                <h2>Update Site Title and Description</h2>
                            </div>
                            <div class="sloginblock">
                                <?php if (isset($upDesc)) {
                                    echo $upDesc;
                                } ?>

                                <?php if (isset($getDesc)) {
                                    $value = $getDesc->fetch_assoc();
                                ?>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Phone Number:</label>
                                        <input type="text" name="phoneNumber" value="<?php echo $value['phoneNumber']; ?>" id="title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="slogan">Email:</label>
                                        <input type="text" name="email" value="<?php echo $value['inistEmail']; ?>" id="slogan" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <img src="<?php echo $value['siteLogo']; ?>" width="300"><br>
                                        <label for="slogo">Site Logo:</label>
                                        <input type="file" name="site_logo" id="slogo">
                                    </div>

                                    <input type="submit" name="submit" Value="Update" class="btn btn-success" />
                                    
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
