<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $add_stat = $stats->insertStats($_POST);
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
                                <h2>Add Stats</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($add_stat)) {
                                        echo $add_stat;
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="category">Stat Name:</label>
                                            <input type="text" name="stat_name" placeholder="Enter Stats Title.." id="category" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Stat Icon:</label>
                                            <input type="text" name="stat_icon" placeholder="Stats Icon" id="category" class="form-control">
                                            <small><a href="https://fontawesome.com/v4.7.0/icons/">Include fontawesome icon class</a></small>
                                            <br><small>ex: class="fa fa-desktop" type just-> desktop</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Stat Amount:</label>
                                            <input type="number" name="stat_amount" placeholder="Stats Icon" id="category" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Add Stats" />
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