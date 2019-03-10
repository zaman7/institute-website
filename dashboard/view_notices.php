<?php require_once 'includes/header.php'; ?>
<?php 
    if (isset($_GET['del_notices'])){
        $del_notices = $_GET['del_notices'];
        $deleteNotices  = $notices->deleteNotices($del_notices);
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
                                <h2>Notices Lists</h2>
                            </div>
                            <div class="content">
                                <div class="catlist">
                                    <?php if (isset($deleteNotices)) {
                                        echo $deleteNotices;
                                    } ?>
                                    <table class="table table-striped" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th width="10%">Serial No.</th>
                                                <th width="30%">Notices Title</th>
                                                <th width="50%">Notices Description</th>
                                                <th width="10%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $getNotices = $notices->getNoticesItems();
                                                if ($getNotices) {
                                                    $i= 0;
                                                    while ($value = $getNotices->fetch_assoc()) {
                                                        $i++;
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $value['notices_title']; ?></td>
                                                <td><?php echo $helper->textShorten($value['notices_desc'],100); ?></td>
                                                <td class="text-center"><a href="?del_slider=<?php echo $value['id']; ?>&delete" class="btn btn-danger" onclick="javascript:confirm('Are Your Sure?') return false;">Delete</a></td>
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