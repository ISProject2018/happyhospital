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
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

  <!-- Main JS File -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/jssor/jssor.slider-27.1.0.min.js"></script>
  <script src="js/slideshow.js"></script>

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
   Top Bar AND Header
  ============================-->

  <?php $page = 'home'; include "php/header.php";?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-content">
      <h2>ความสุข =
        <span>การให้</span>
        <br>ความใส่ใจ =
        <span>ลงมือทำ</span>
      </h2>
      <div>
        <a href="volunteer.php" class="btn-projects scrollto">เพิ่มความสุข ลดความทุกข์ ในพื้นที่โรงพยาบาล</a>
      </div>
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

  <main id="main">

    <!--==========================
      volunteer Section
    ============================-->
    <section id="volunteer" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 volunteer-img">
            <div class="mr-2">
              <?php include "php/slideshow.php";?>
            </div>
          </div>

          <div class="col-lg-6 content">
            <h2>อาสาสมัคร</h2>
            <ul>
              <li>
                <i class="ion-android-checkmark-circle"></i> คุณสมบัติ</li>
              <li>
                <i class="ion-android-checkmark-circle"></i> กิจกรรมอาสาสมัคร ใน รพ.</li>
              <li>
                <i class="ion-android-checkmark-circle"></i> กลุ่มเป้าหมาย</li>
              <li>
                <i class="ion-android-checkmark-circle"></i> การเตรียมความพร้อม</li>
              <li>
                <i class="ion-android-checkmark-circle"></i> ขั้นตอนเป็นอาสาสมัคร ใน รพ.</li>
              <li>
                <i class="ion-android-checkmark-circle"></i> ดาวน์โหลดใบสมัคร</li>
            </ul>
            <div class="float-right">
              <a class="btn-readmore" href="volunteer.php">ดูทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- #volunteer -->

    <!--==========================
      activity Section
    ============================-->
    <section id="activity" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>ตารางกิจกรรม วัน - เวลา ที่ลงพื้นที่</h2>
          <p style="text-indent: 30px">หากอาสาสมัคร มีความชำนาญในการทำกิจกรรม อส. ใน รพ. สามารถลงพื้นที่ได้ที่ </p>
        </div>
        <div>
          <table class="table table-respontive">
            <tr>
              <th>สถานที่ทำงาน</th>
              <th class="text-center">วัน</th>
              <th class="text-center">เวลา</th>
            </tr>
            <tr>
              <td>โรงพยาบาลรามาธิบดี</td>
              <td class="text-center">ทุกวันพุธ</td>
              <td class="text-center">13.00 - 15.00 น.</td>
            </tr>
            <tr>
              <td>โรงพยาบาลพระมงกฏเกล้า</td>
              <td class="text-center">ทุกวันศุกร์</td>
              <td class="text-center">09.00 - 12.00 น.</td>
            </tr>
            <tr>
              <td colspan="3">
                <p class="pt-3">
                  <strong>สอบถามรายละเอียดเพิ่มเติม :</strong> เจ้าหน้าที่โครงการ : นางสาวจามจุรี แซ่ซื้อ (มินนี่)
                  <span> l </span> E-mail :
                  <span> info@happyhospital.org </span>
                  <span> l </span>โทร:
                  <span>02- 973-2236 </span>ต่อ
                  <span>103, 085-1966102</span>
                </p>
              </td>
            </tr>
          </table>
        </div>

      </div>
    </section>
    <!-- #volunteer -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>ชุดความรู้อาสาสมัครในรพ. </h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="img/manual/h1.jpg">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 moblie-btn">
                  <h4 class="title">คู่มืออาสาสมัครในโรงพยาบาล
                    <br>
                    <br>
                  </h4>
                  <a href="http://www.happyhospital.org/manual1/index.html" target="_blank" class="cta-btn-1">เปิด E-book
                    <i class="fa fa-book" aria-hidden="true"></i>
                  </a>
                  <a href="file/manual/manual_downloadPDF.PDF" class="cta-btn-2" target="_blank">ดาวน์โหลด PDF
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <img src="img/manual/h2.jpg">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 moblie-btn">
                  <h4 class="title">การเตรียมความพร้อมเบื้องต้น สำหรับอาสาสมัครในโรงพยาบาล</h4>
                  <a href="http://www.happyhospital.org/manual2/index.html" class="cta-btn-1" target="_blank">เปิด E-book
                    <i class="fa fa-book" aria-hidden="true"></i>
                  </a>
                  <a href="file/manual/manual2_downloadPDF.PDF" class="cta-btn-2" target="_blank">ดาวน์โหลด PDF
                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!-- #services -->

    <!--==========================
      Relation and Article Section
    ============================-->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <section id="relation">
            <div class="container">
              <div class="section-header">
                <h2>ประชาสัมพันธ์</h2>
              </div>
              <?php 
            $sql = "SELECT autopage4_data_topic.IdTopic , autopage4_data_topic.TopicName , autopage4_detail_topic.PicName  , autopage4_detail_topic.DetailTopic , autopage4_detail_topic.Date_up ";  
            $sql .= "FROM autopage4_data_topic ";
            $sql .= "INNER JOIN autopage4_detail_topic ON autopage4_data_topic.IdTopic = autopage4_detail_topic.IdTopic ";
            $sql .= "AND autopage4_data_topic.IdAuto = 29 ORDER BY autopage4_data_topic.IdTopic DESC LIMIT 1";
            $result = $connection -> query($sql);
            while($row = mysqli_fetch_assoc($result)) 
            {
            ?>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active">
                  <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                      <img src="autopagev4/picture/<?echo $row['PicName'];;?>" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                      <a href="showpost_detail.php?IdTopic=<?echo $row['IdTopic'];?>" target="_blank" class="headline">
                        <h5>
                          <? echo ThaiIToUTF8($row['TopicName']);?>
                        </h5>
                      </a>
                      <p>
                        <? echo ThaiIToUTF8($row['DetailTopic']);?>
                      </p>
                      <!-- Post Meta -->
                      <div class="row">
                        <div class="post-meta col-6">
                          <p class="post-date">โพสเมื่อ
                            <? echo convertDate($row['Date_up']);?>
                          </p>
                        </div>
                        <div class="post-meta col-6">
                          <div class="float-right">
                            <a href="relation.php">
                              <button class="btn btn-primary">ดูทั้งหมด</button>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <?}?>
            </div>
          </section>
          <!-- #Relation -->
        </div>
        <div class="col-md-6 col-12">
          <section id="article">
            <div class="container">
              <div class="section-header">
                <h2>บทความ / เกร็ดความรู้ </h2>
              </div>

              <div class="tab-content">
                <?php
                $sql = "SELECT autopage4_data_topic.IdTopic , autopage4_data_topic.TopicName , autopage4_detail_topic.Date_up ";  
                $sql .= "FROM autopage4_data_topic ";
                $sql .= "INNER JOIN autopage4_detail_topic ON autopage4_data_topic.IdTopic = autopage4_detail_topic.IdTopic ";
                $sql .= "AND autopage4_data_topic.IdAuto = 7 ORDER BY autopage4_data_topic.IdTopic DESC LIMIT 4";
                $result = $connection -> query($sql);
                while($row = mysqli_fetch_assoc($result)) 
                {
                ?>
                <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig mb-2" data-wow-delay="0.2s">
                  <!-- Post Thumbnail -->
                  <div class="post-thumbnail">
                    <img src="img/topic.jpg" alt="">
                  </div>
                  <!-- Post Content -->
                  <div class="post-content">
                    <a href="showpost_detail.php?IdTopic=<?echo $row['IdTopic'];?>" target="_blank" class="headline">
                      <h5>
                        <? echo ThaiIToUTF8($row['TopicName']);?>
                      </h5>
                    </a>
                    <!-- Post Meta -->
                    <div class="post-meta">
                      <p>
                        <p class="post-date">โพสเมื่อ
                          <? echo convertDate($row['Date_up']);?>
                        </p>
                      </p>
                    </div>
                  </div>
                </div>
                <? } ?>
              </div>
              <div class="float-right pt-2 wow fadeInUpBig">
                <a href="relation.php">
                  <button class="btn btn-primary">ดูทั้งหมด</button>
                </a>
              </div>


            </div>

        </div>
        </section>
        <!-- #article -->
      </div>
    </div>

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>เครือข่าย</h2>
          <p>แลกลิงค์ เพื่อเป็นเพื่อนบ้านและเผยแพร่กิจกรรมดีๆกับเรายินดีต้อนรับพันธมิตรทุกสาขาจ้ะ </p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/Jidasa.gif" alt="">
          <img src="img/clients/Greenpeace-logo.png" alt="">
        </div>

      </div>
    </section>
    <!-- #clients -->


    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>อาสาสร้างสุข</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt=""> ความสุขเป็นสิ่งที่เราสร้างขึ้นได้ ทั้งต่อตัวเอง และต่อคนรอบข้าง เพราะความสุขไม่ใช่แค่ความพรั่งพร้อมเสมอไป
              ให้ด้วยเต็มใจ ทำด้วยเต็มแรงแค่นั้นก็เพียงพอ
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/girl.png" class="testimonial-img" alt="" style="position:fixed;bottom: 25%;left:37%;">
            <div class="fixed-bottom" style="bottom: 14%;">
              <h3>pie_maple</h3>
              <h4>อาสาสมัคร</h4>
            </div>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt=""> ด้วยลายมือที่แสนหวัด ด้วยรอยหยักแห่งเส้นผม ด้วยรอยยิ้มนิ่มกลม ด้วยอารมย์รักยิ่งและยินดี ขอเป็นกำลังใจให้เด็กน้อย
              แลผู้ป่วยน้อยใหญ่ที่มากหลาย บอกด้วยยิ้มไมตรีที่มากมาย บอกมิตรและสหาย ป้าผู้นี้ผู้มาเยี่ยน
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/girl.png" class="testimonial-img" alt="" style="position:fixed;bottom: 25%;left:37%;">
            <div class="fixed-bottom" style="bottom: 14%;">
              <h3>ป้าจุ๋ม</h3>
              <h4>อาสาสมัคร</h4>
            </div>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt=""> หากชีวิตหนึ่งที่เกิดมาได้มีโอกาสเป็นผู้ให้กับเค้าบ้าง ก็คงจะมีคุณค่ามากกว่าการเป็นผู้รับแต่ฝ่ายเดียว
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/boy.png" class="testimonial-img" alt="" style="position:fixed;bottom: 25%;left:37%;">
            <div class="fixed-bottom" style="bottom: 14%;">
              <h3>เต้</h3>
              <h4>อาสาสมัคร</h4>
            </div>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt=""> แค่คุณเป็นผู้ให้ คุณก็จะรู้สึกถึงความสุขที่ได้ให้นั้นทันทีอยู่แล้ว...ไม่เชื่อลองดูสิค่ะ
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/girl.png" class="testimonial-img" style="position:fixed;bottom: 25%;left:37%;">
            <div class="fixed-bottom" style="bottom: 14%;">
              <h3>เอื้อยจ้า</h3>
              <h4>อาสาสมัคร</h4>
            </div>
          </div>

          <div class="testimonial-item">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt=""> มีธรรมะในหัวใจ ปฏิบัติตนตามหลักคำสอนของพระพุทธศาสนา จะดำเนินชีวิตอย่างมีความสุข
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
            <img src="img/girl.png" class="testimonial-img" alt="" style="position:fixed;bottom: 25%;left:37%;">
            <div class="fixed-bottom" style="bottom: 14%;">
              <h3>ฝน</h3>
              <h4>อาสาสมัคร</h4>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #testimonials -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include "php/footer.php"?>
  <!-- #footer -->

  <a href="#" class="back-to-top">
    <i class="fa fa-chevron-up"></i>
  </a>

  <!-- JavaScript Libraries -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/home.js"></script>

</body>

</html>