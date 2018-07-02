<?php
require_once "admin/connect_db.php";
require_once "admin/function.php";
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
    <link href="img/favicon.png" rel="icon">
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
            <?
            $sql = "SELECT autopage4_data_topic.IdTopic , autopage4_data_topic.TopicName , autopage4_detail_topic.DetailTopic , autopage4_detail_topic.Date_up ";  
            $sql .= "FROM autopage4_data_topic ";
            $sql .= "INNER JOIN autopage4_detail_topic ON autopage4_data_topic.IdTopic = autopage4_detail_topic.IdTopic ";
            $sql .= "AND autopage4_data_topic.IdAuto = 29 ORDER BY autopage4_data_topic.IdTopic DESC LIMIT 6";
            $result = $connection -> query($sql);
            while($row = mysqli_fetch_assoc($result)) 
            {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="tab-content">
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/b1.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content mb-1">
                                <a href="showpost_detail.php?IdTopic=<?echo $row['IdTopic'];?>" class="headline" target="_blank">
                                    <h5><? echo $row['TopicName'];?></h5>
                                </a>
                                <p><? echo $row['DetailTopic'];?></p>
                            <!-- Post Meta -->
                                <div class="post-meta">
                                    <p class="post-date">โพสเมื่อ <? echo convertDate($row['Date_up']);?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?}?>    
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