<?php require_once 'includes/header.php'; ?>
<?php  ?><?php      
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $insBlog = $blogs->insertBlogs($_POST, $_FILES);
    }

?>    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-12 padding-right15">
                    <?php require_once 'includes/sidebar.php'; ?>
                </div>

                <div class="col-md-9 col-lg-10 col-sm-8 col-xs-12 padding-left15">
                    <div class="main-content">
                        <div class="display-flax-content">
                            <div class="section-title">
                                <h2>Add Blogs Posts</h2>
                            </div>
                            <div class="addpost">
                                <?php if (isset($insBlog)) {
                                    echo $insBlog;
                                } ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" name="posts_title" placeholder="Enter Post Title..." id="post-title" class="form-control" />
                                    </div>

                                    <div class="form-group">
                                        <label for="file">Upload Image:</label>
                                        <input type="file" name="posts_image" id="file" />
                                    </div>

                                    <div class="form-group">
                                        <label>Blogs Details:</label>
                                        <textarea name="posts_body" placeholder="Posts Details" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" name="author" placeholder="Author" id="post-title" class="form-control" />
                                    </div>

                                    <input type="submit" name="submit" Value="Save" class="btn btn-success" />

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.2/jquery.tinymce.min.js
  <script>tinymce.init({ selector:'textarea' });</script> 
<?php require_once 'includes/footer.php'; ?>