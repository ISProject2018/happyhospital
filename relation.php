<?php

require_once "admin/connect_db.php";
require_once "admin/function.php";
require_once "admin/Paginator.class.php";


$limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 6;
$page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
$links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
$query      = "SELECT autopage4_data_topic.IdTopic , autopage4_data_topic.TopicName , autopage4_detail_topic.PicName , autopage4_detail_topic.DetailTopic , autopage4_detail_topic.Date_up FROM autopage4_data_topic , autopage4_detail_topic WHERE autopage4_data_topic.IdTopic = autopage4_detail_topic.IdTopic AND autopage4_data_topic.IdAuto = 29 ORDER by IdTopic DESC";

$Paginator  = new Paginator( $connection, $query );

$results    = $Paginator->getData($limit, $page);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>โครงการโรงพยาบาลมีสุข</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo.jpg" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/relation.css" rel="stylesheet">

</head>

<body>
    <!-- header -->
    <?php $page = "relation"; include "php/header.php";?>

    <!--==========================
        Intro Section
    ============================-->
    <section id="intro">

        <div class="intro-content">
            <h2>ประชาสัมพันธ์</h2>
        </div>
        <div id="intro-carousel" class="owl-carousel">
            <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
            <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
        </div>
    </section>
    <!-- #intro -->

    <section id="content">
        <div class="container-fluid">
            <div class="section-header">
                <h2>ข่าวประชาสัมพันธ์</h2>
            </div>
            <div class="row">
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
            
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="tab-content">
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="autopagev4/picture/<?echo $results->data[$i]['PicName'];?>" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content mb-1">
                                    <a href="showpost_detail.php?IdTopic=<?echo ThaiIToUTF8($results->data[$i]['IdTopic']);?>" class="headline" target="_blank">
                                        <h5><?  echo ThaiIToUTF8($results->data[$i]['TopicName']);?></h5>
                                    </a>
                                    <p><? echo ThaiIToUTF8($results->data[$i]['DetailTopic']);?></p>
                                <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p class="post-date">โพสเมื่อ <? echo convertDate($results->data[$i]['Date_up']);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>    
            </div>
            <div class="d-flex justify-content-center mt-3">
                <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
            </div>
            
        </div>
    </section>


    <!-- footer -->
    <?php include "php/footer.php"; ?>

    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/sticky/sticky.js"></script>
    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>