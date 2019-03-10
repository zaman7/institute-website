<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $add_news = $latest_news->insertLatestNews($_POST);
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
                                    <?php if (isset($add_news)) {
                                        echo $add_news;
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="category">News Title:</label>
                                            <input type="text" name="news_title" placeholder="Enter News Title.." id="category" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="category">News Link:</label>
                                            <input type="text" name="news_link" placeholder="Enter News Link" id="category" class="form-control">
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Add News" />
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