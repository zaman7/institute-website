<?php require_once 'includes/header.php'; ?>
<?php 
    if (isset($_GET['del_news'])){
        $del_news = $_GET['del_news'];
        $delNews  = $latest_news->deleteNews($del_news);
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
                                <h2>Latest News</h2>
                            </div>
                            <div class="content">
                                <div class="catlist">
                                    <?php if (isset($delNews)) {
                                        echo $delNews;
                                    } ?>
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th width="10%">Serial No.</th>
                                                <th width="80%">News Title</th>
                                                <th width="10%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $getLatestNews = $latest_news->getLatestNews();
                                                if ($getLatestNews) {
                                                    $i= 0;
                                                    while ($value = $getLatestNews->fetch_assoc()) {
                                                        $i++;
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $value['news_title']; ?></td>
                                                <td class="text-center"><a href="view_news.php?del_news=<?php echo $value['id']; ?>&delete" class="btn btn-danger" onclick="javascript:confirm('Are Your Sure?') return false;">Delete</a></td>
                                            </tr>
                                        <?php } } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>