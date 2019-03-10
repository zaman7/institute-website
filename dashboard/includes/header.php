<?php
    $filedir = realpath(dirname(__FILE__));
    /*require_once $filedir.'/../../libs/Database.php';
    require_once $filedir.'/../../libs/Session.php';
    require_once $filedir.'/../../libs/Helpers.php';
    require_once $filedir.'/../../libs/Sitedesc.php';
    require_once $filedir.'/../../libs/SocialLink.php';
    require_once $filedir.'/../../libs/LatestNews.php';
    require_once $filedir.'/../../libs/SliderImages.php';
    require_once $filedir.'/../../libs/About.php';*/

    spl_autoload_register(function ($class) {
        require_once '../libs/' . $class . '.php';
    });
    Session::init();
    Session::checkSession();

    //create object
    $helper = new Helpers();
    $desc = new Sitedesc();
    $social = new SocialLink();
    $latest_news = new LatestNews();
    $slider = new SliderImages();
    $about = new About();
    $notices = new Notices();
    $subjects = new Subjects();
    $blogs = new BlogPosts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home || Admin Panel</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">


    <!-- Extranal CSS Files Link -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/datatables/datatables.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- style & responsive css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

    <section class="header-area">
        <div class="container-fluid">
            <div class="header-top">
                <div class="off-canvas-menu">
                    <div class="mobile-menu">
                        <div class="close-btn">
                            <img src="images/cross.png">
                        </div>
                        <div id="accordion" class="collapse-item-section">
                            <div class="collapse-body">
                                <h3><a data-toggle="collapse" data-target="#post-opt" id="post-opth" aria-expanded="true" aria-controls="post-opt"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Posts<i class="fa fa-angle-down"></i> <i class="fa fa-angle-up"></i></a></h3>

                                <div id="post-opt" class="collapse" aria-labelledby="post-opth" data-parent="#accordion">
                                    <div class="content-body submenu">
                                        <a href="addpost.php">Add New</a>
                                        <a href="postlist.php">All Posts</a>
                                    </div>
                                </div>

                            </div>

                            <div class="collapse-body">
                                <h3><a data-toggle="collapse" data-target="#page-opt" id="page-opth" aria-expanded="true" aria-controls="page-opt"><i class="fa fa-clone" aria-hidden="true"></i> Pages Option<i class="fa fa-angle-down"></i> <i class="fa fa-angle-up"></i></a></h3>

                                <div id="page-opt" class="collapse" aria-labelledby="page-opth" data-parent="#accordion">
                                    <div class="content-body submenu">
                                        <a href="">Add New</a>
                                        <a href="">All Pages</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-body">
                                <h3><a data-toggle="collapse" data-target="#category-page" id="category-pageh" aria-expanded="true" aria-controls="category-page"><i class="fa fa-list" aria-hidden="true"></i> Category<i class="fa fa-angle-down"></i> <i class="fa fa-angle-up"></i></a></h3>

                                <div id="category-page" class="collapse" aria-labelledby="category-pageh" data-parent="#accordion">
                                    <div class="content-body submenu">
                                        <a href="catadd.php">Add Category</a>
                                        <a href="category.php">All Category</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-body">
                                <h3><a data-toggle="collapse" data-target="#siteoption" id="siteoptionh" aria-expanded="true" aria-controls="siteoption"><i class="fa fa-tags" aria-hidden="true"></i> Site Option<i class="fa fa-angle-down"></i> <i class="fa fa-angle-up"></i></a></h3>

                                <div id="siteoption" class="collapse" aria-labelledby="siteoptionh" data-parent="#accordion">
                                    <div class="content-body submenu">
                                        <a href="desctitle.php">Title & Slogan</a>
                                        <a href="social.php">Social Media</a>
                                        <a href="copyright.php">Copyright</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-body">
                                <h3><a data-toggle="collapse" data-target="#user-opt" id="user-opth" aria-expanded="true" aria-controls="user-opt"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Users<i class="fa fa-angle-down"></i> <i class="fa fa-angle-up"></i></a></h3>

                                <div id="user-opt" class="collapse" aria-labelledby="user-opth" data-parent="#accordion">
                                    <div class="content-body submenu">
                                        <a href="userlist.php">All Users</a>
                                        <a href="adduser.php">Add Users</a>
                                        <a href="profile.php">Your Profile</a>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse-body">
                                <h3><a href="inbox.php"><i class="fa fa-inbox" aria-hidden="true"></i> Inbox</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-sm-9 col-xs-9">
                        <div class="menu-content">
                            <div class="mobile-nav-bar">
                                <div id="active-mobilemenu">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                                <div class="home-btn">
                                    <a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                                </div>
                                <div class="site-url-mobile">
                                    <a href="http://localhost/institute-website/" target="_blank"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </div>
                            </div>

                            <div class="site-url">
                                <a href="http://localhost/institute-website/" target="_blank"><i class="fa fa-home" aria-hidden="true"></i>View Site</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                        <div class="view-user right">
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Admin
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end nav-->