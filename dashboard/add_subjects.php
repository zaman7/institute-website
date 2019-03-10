<?php require_once 'includes/header.php'; ?>
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $insertTechInfo = $subjects->insertSubjects($_POST);
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
                        <?php if (isset($_GET['edit_subjects'])) {
                            $subjectId = $_GET['edit_subjects']
                            /*if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){

                            }*/
                        ?>

                        <div class="display-flax-content">
                            <div class="section-title">
                                <h2>Edit Subjects</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php
                                    $getTech = $subjects->getSingleTechnology($subjectId);
                                    if (isset($getTech)) {
                                        $value = $getTech->fetch_assoc();
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="title">Technology Name:</label>
                                            <input type="text" name="technology" value="<?php echo $value['technology'] ?>" id="title" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Head Of Department:</label>
                                            <input type="text" name="headOf_department" value="<?php echo $value['headOf_department'] ?>" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Faculty Members:</label>
                                            <input type="number" name="faculty_members" value="<?php echo $value['faculty_members'] ?>" class="form-control" style="width: 200px">
                                        </div>

                                        <div class="form-group">
                                            <label>Total Students:</label>
                                            <input type="number" name="total_students" value="<?php echo $value['total_students'] ?>" class="form-control" style="width: 200px">
                                        </div>

                                        <div class="form-group">
                                            <label>Icon:</label>
                                            <input type="text" name="icon" value="<?php echo $value['icon'] ?>" class="form-control" style="width: 150px">
                                            <small><a href="https://fontawesome.com/v4.7.0/icons/">Include fontawesome icon class</a></small>
                                            <br><small>ex: class="fa fa-desktop" type just-> desktop</small>
                                        </div>

                                        <input type="submit" class="btn btn-success" name="update" Value="Update Technology" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="display-flax-content">
                            <div class="section-title">
                                <h2>Add Subjects</h2>
                            </div>
                            <div class="content">
                                <div class="catblock">
                                    <?php if (isset($insertTechInfo)) {
                                        echo $insertTechInfo;
                                    } ?>
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="title">Technology Name:</label>
                                            <input type="text" name="technology" placeholder="Technology Name" id="title" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Head Of Department:</label>
                                            <input type="text" name="headOf_department" placeholder="Head of Department" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Faculty Members:</label>
                                            <input type="number" name="faculty_members" placeholder="Faculty Members" class="form-control" style="width: 200px">
                                        </div>

                                        <div class="form-group">
                                            <label>Total Students:</label>
                                            <input type="number" name="total_students" placeholder="Total Students" class="form-control" style="width: 200px">
                                        </div>

                                        <div class="form-group">
                                            <label>Icon:</label>
                                            <input type="text" name="icon" placeholder="Icon class" class="form-control" style="width: 150px">
                                            <small><a href="https://fontawesome.com/v4.7.0/icons/">Include fontawesome icon class</a></small>
                                            <br><small>ex: class="fa fa-desktop" type just-> desktop</small>
                                        </div>

                                        <input type="submit" class="btn btn-success" name="submit" Value="Add Technology" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>