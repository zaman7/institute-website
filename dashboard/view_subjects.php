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
                                                <th width="5%">Serial No.</th>
                                                <th width="25%">Technology</th>
                                                <th width="25%">Head Of Department</th>
                                                <th width="10%">Total Students</th>
                                                <th width="10%">Icon</th>
                                                <th width="15%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                                $getSubject = $subjects->getTechnology();
                                                if ($getSubject) {
                                                    $i= 0;
                                                    while ($value = $getSubject->fetch_assoc()) {
                                                        $i++;
                                                
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $value['technology']; ?></td>
                                                <td><?php echo $value['headOf_department']; ?></td>
                                                <td><?php echo $value['faculty_members']; ?> Faculty Members</td>
                                                <td><?php echo $value['total_students']; ?>+ Students</td>
                                                <td><i class="fa fa-<?php echo $value['icon']; ?>"></i></td>
                                                <td><a href="add_subjects.php?edit_subjects=<?php echo $value['id'] ?>" class="btn btn-warning">Edit</a> || <a href="" class="btn btn-danger">Delete</a></td>
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