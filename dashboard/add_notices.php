<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $updateNotices = $notices->insertNotices($_POST);
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
                                <h2>Add Latest News</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($updateNotices)) {
                                        echo $updateNotices;
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="title">Notices Title:</label>
                                            <input type="text" name="notices_title" placeholder="Notices Title" id="title" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="category">Details:</label>
                                            <textarea name="notices_desc" placeholder="Notices Description" rows="12" id="category" class="form-control"></textarea>
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Add Notices" />
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