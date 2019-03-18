<?php require_once 'includes/header.php'; ?>
<?php 
    /*if (isset($_GET['del_notices'])){
        $del_notices = $_GET['del_notices'];
        $deleteNotices  = $notices->deleteNotices($del_notices);
    }*/

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
                                <h2>Stats Lists</h2>
                            </div>
                            <div class="content">
                                <div class="catlist">
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Serial No.</th>
                                                <th>Stats Name</th>
                                                <th>Stats Amount</th>
                                                <th>Icon</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $getStats = $stats->getAllStats();
                                                if ($getStats) {
                                                    $i= 0;
                                                    while ($value = $getStats->fetch_assoc()) {
                                                        $i++;
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $value['stat_name']; ?></td>
                                                <td><?php echo $value['stat_amount']; ?> </td>
                                                <td><i class="fa fa-<?php echo $value['stat_icon']; ?>"></i></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Action button">
                                                        <a href="add_subjects.php?edit_subjects=<?php echo $value['id'] ?>" class="btn btn-warning">Edit</a>
                                                        <a href="" class="btn btn-danger">Delete</a></td>
                                                    </div>
                                                </td>
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