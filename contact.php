<?php 

    $filedir = realpath(dirname(__FILE__));
    require_once $filedir.'/libs/Database.php';
    require_once $filedir.'/libs/Helpers.php';
    require_once $filedir.'/libs/Sitedesc.php';
    require_once $filedir.'/libs/SocialLink.php';
    require_once $filedir.'/libs/LatestNews.php';
    require_once $filedir.'/libs/Notices.php';
    require_once $filedir.'/libs/Contacts.php';

    $helper = new Helpers();
    $desc = new Sitedesc();
    $social = new SocialLink();
    $latest_news = new LatestNews();
    $notices = new Notices();
    $contact = new Contacts();


    $getDesc = $desc->getDescriptionData();
    $getSocial = $social->getSocialLink();
    $l_news = $latest_news->getLatestNews();
    $getNotices = $notices->getNoticesItems();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RIMT :: Contacts</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div id="home">
        <!--  head part starts  -->
        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 col-12 logo">
                        <?php if (isset($getDesc)) {
                            $value = $getDesc->fetch_assoc();
                        }
                        ?>
                        <a href="index.php">
                            <img src="dashboard/<?php echo $value['siteLogo']; ?>" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-5 col-12 text-right">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li><a href="tel:<?php echo $value['phoneNumber']; ?>"><i class="fa fa-phone"></i><?php echo $value['phoneNumber']; ?></a></li>
                                    <li><a href="mailto:<?php echo $value['inistEmail']; ?>"><i class="fa fa-envelope"></i><?php echo $value['inistEmail']; ?></a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <?php if (isset($getSocial)) {
                                                $sValue = $getSocial->fetch_assoc();
                                            }
                                            ?>
                                            <li><a href="<?php echo $sValue['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?php echo $sValue['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $sValue['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?php echo $sValue['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                    <li><a href="#"><i class="fa fa-user-plus si"></i>register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--  head part ends  -->
        <!-- menu part start -->
        <section id="menu">
            <div class="container text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    academic
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="teacher.html">Teacher &amp; stuff</a>
                                    <a class="dropdown-item" href="student.html">student info</a>
                                    <a class="dropdown-item" href="lab.html">lab and workshop</a>
                                    <a class="dropdown-item" href="events.html">events</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admission.html">admission info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="result.html">examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="result.html">result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->
        <!-- marque starts -->
        <section id="marq">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 pr-0">
                        <span>latest news</span>
                    </div>
                    <div class="col-md-11 col-sm-10">
                        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

                        <?php if (isset($l_news)) {
                            while ($lnew_value = $l_news->fetch_assoc()) {
                                
                        ?>
                        <a href="<?php echo $lnew_value['news_link']; ?>" class="mrq_item" target="_blank"><?php echo $lnew_value['news_title']; ?></a>

                        <?php } }else{ echo "No News is hear";} ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </section>
        <!--    marque ends -->
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>contact-us</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.html"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="index.html">contact-us</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-8 col-sm-12 col-12 pr-md-0">
                    <div class="contact">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <h2>contact-us</h2>
                            </div>
                            <div class="col-md-5 col-12 p-0">
                                
                                <p>All the Lorem Ipsum generators on the era Internet tend.</p>
                                <a href="tel:+8801721279241"><i class="fa fa-phone"></i><b>phone:</b>  +8801721279241</a>
                                <a href="mailto:zaman@gmail.com"><i class="fa fa-envelope"></i><b>e-mail:</b> zaman@gmail.com</a>
                                <a href="#"><i class="fa fa-location-arrow"></i><b>address:</b> >Mymensingh, Dhaka, Bangladesh</a>
                            </div>
                            <div class="col-md-6 col-12 offset-md-1 p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.09895897968!2d90.39673651436891!3d24.757795955463145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564f1c2e304829%3A0xd2a7bdc257f5fa01!2sRumdo+Institute+of+Modern+Technology!5e0!3m2!1sen!2sbd!4v1553670167287" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-12 p-0">
                                <h2 class="h">send us a message</h2>
                            </div>
                            <div class="col-md-12 p-0">
                                
                                <p>All the Lorem Ipsum generators on the era Internet tend.</p>
                                
                            </div>
                             
                            <div class="col-12 ">
                                <?php

                                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $sendMsg = $contact->sendMessages($_POST);
                                        if (isset($sendMsg)) {
                                            echo $sendMsg;
                                        }

                                    }
                                ?>
                               <form action="" method="POST">
                                    <div class="row m-0">
                                       
                                        <div class="col-6 p-0">
                                            <input class="name" name="name" type="text" placeholder="your name">
                                        </div>
                                        <div class="col-6 p-0">
                                            <input type="email" name="email" placeholder="your E-mail">
                                        </div>
                                        <div class="col-12 p-0">
                                            <input type="text" name="subject" placeholder="subject">
                                        </div>
                                        <div class="col-12 p-0">
                                            <textarea name="messages" id="" cols="30" rows="10" placeholder="message"></textarea>
                                            <button type="submit">send</button>
                                        </div>
                            
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- narrow starts -->
                <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <div class="col-md-12 col-12 col-sm-4">
                            <div class="notice">
                                <h3>notice board</h3>
                                <div class="note-slick">
                                    <?php
                    
                                        if (isset($getNotices)) {
                                            while ($noticesValue = $getNotices->fetch_assoc()) {
                                    ?>
                                    <div class="note col-md-12 col-sm-12 col-12">
                                        <div class="row">
                                            <div class="col-md-1 col-12 col-sm-1 p-0">
                                                <i class="fa fa-edit"></i>
                                            </div>
                                            <div class="col-md-11 col-sm-11 p-0 n">
                                                <h6 style="display: inline-block"> <?php echo $noticesValue['notices_title']; ?></h6>
                                                <p><i class="fa fa-calendar"></i> <?php echo $helper->formatTime($noticesValue['notices_date']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="s-area">
                                <h3>student area</h3>

                                <ul>
                                    <li><a href="admission.html" target="_blank"><i class="fa fa-arrow-right"></i>admission</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>examination</a></li>
                                    <li><a href="result.html" target="_blank"><i class="fa fa-arrow-right"></i>results</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>class routine</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>syllabus</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>academic calander</a></li>
                                    <li><a href="lab.html" target="_blank"><i class="fa fa-arrow-right"></i>academic programs</a></li>
                                    <li><a href="events.html" target="_blank"><i class="fa fa-arrow-right"></i>activity</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>scholarship</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-arrow-right"></i>rover scout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 col-sm-4">
                            <div class="link">
                                <h3>useful links</h3>
                                <ul>
                                    <li><a href="#">ministry of education</a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">bangladesh technical education board <span>(BTEB)</span></a></li>
                                    <li><a href="#">directorate of technical education board </a></li>
                                    <li><a href="#">skills &amp; Training enhancement project</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part ends -->

    <!-- foot starts -->
    <section id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <img src="images/logo-small.png" alt="" class="img-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the best.</p>


                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>
                <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                    <h5>quick links</h5>
                    <ul>
                        <li><a href="#">admission</a></li>
                        <li><a href="#">results</a></li>
                        <li><a href="#">academics</a></li>
                        <li><a href="#">faculty</a></li>
                        <li><a href="#">news &amp; events</a></li>
                    </ul>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                    <h5>contact us</h5>
                    <div class="row soc">
                        <div class="col-md-2 col-sm-2 col-1">

                            <ul>
                                <li><i class="fa fa-phone"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                                <li><i class="fa fa-location-arrow"></i></li>
                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8 col-8">
                            <ul>
                                <li><a href="tel:+880-1112-333-444">+880-1112-333-444</a></li>
                                <li><a href="mailto:Support@domain.com">Support@domain.com</a></li>
                                <li><a href="#">Dhanmondi, Dhaka, Bangladesh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-1 col-sm-5 col-5">
                    <h5>find us</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694485038!2d90.36710723558421!3d23.747050044430356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1550813533531" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer id="copy">
        <div class="container text-center">
            <p>Copyright &copy; 2018 Pathshala Polytechnic Institute.Designed &amp; Developed by Creative IT Institute</p>
        </div>
    </footer>
    <!-- foot ends -->
    <!-- top to -->
    <div>
        <i class="fa fa-angle-up" id="return-to-top"></i>
    </div>


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>