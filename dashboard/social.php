<?php require_once 'includes/header.php'; ?>
<?php      
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $upSocial = $social->updateSocial($_POST);
    }
    $getSocial = $social->getSocialLink();

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
                                <h2>Update Social Media</h2>
                            </div>
                            <div class="social">
                                <?php if (isset($upSocial)) {
                                    echo $upSocial;
                                } ?>

                                <?php if (isset($getSocial)) {
                                    $sValue = $getSocial->fetch_assoc();
                                }
                                ?>
                                <form action="#" method="POST">
                                    <div class="form-group">
                                        <label for="facebook">Facebook:</label>
                                        <input type="text" name="facebook" value="<?php echo $sValue['facebook']; ?>" id="facebook" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter">Twitter:</label>
                                        <input type="text" name="twitter" value="<?php echo $sValue['twitter']; ?>" id="twitter" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn:</label>
                                        <input type="text" name="linkedin" value="<?php echo $sValue['linkedin']; ?>" id="linkedin" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="google">Google Plus:</label>
                                        <input type="text" name="google" value="<?php echo $sValue['google']; ?>" id="google" class="form-control">
                                    </div>

                                    <input type="submit" name="submit" Value="Update" class="btn btn-success" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>