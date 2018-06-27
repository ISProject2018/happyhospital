<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i>
        <a href="mailto:info@happyhospital.org">info@happyhospital.org</a>
        <i class="fa fa-phone"></i> 085-1966102
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/happyhospitalMR/" class="facebook" target="_blank">
          <i class="fa fa-facebook"> : โครงการโรงพยาบาลมีสุข มูลนิธิกระจกเงา </i>
        </a>
        <a>
          <img src="img/line.png" alt="" height="25" width="25" style="margin-top: -6px;"> : 0851966102
          </a>
      </div>
    </div>
</section>

<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
          <a href="index.php" class="scrollto"><img src="img/logo.jpg" alt="โรงพยาบาลมีสุข" height="65px"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="<?php if($page == 'home'){echo 'menu-active';} ?>">
            <a href="index.php" class="scrollto">หน้าหลัก</a>
          </li>
          <li class="<?php if($page == 'aboutus'){echo 'menu-active';} ?>">
            <a href="aboutus.php" class="scrollto">เกี่ยวกับเรา</a>
          </li>
          <li class="menu-has-children <?php if($page == 'volunteer'){echo 'menu-active';} ?>">
            <a href="volunteer.php" class="scrollto">อาสาสมัคร</a>
            <ul>
              <li>
                <a href="volunteer.php#property" class="scrollto">คุณสมบัติ</a>
              </li>
              <li>
                <a href="activity.php" class="scrollto">กิจกรรมอาสาสมัคร ใน รพ.</a>
              </li>
              <li>
                <a href="#" class="scrollto">กลุ่มเป้าหมาย</a>
              </li>
              <li>
                <a href="#" class="scrollto">การเตรียมความพร้อม</a>
              </li>
              <li>
                <a href="faq.php" class="scrollto">FAQ</a>
              </li>
              <li>
                <a class ="nav-modal" onclick = "$('#regisVolunteer').modal();">ขั้นตอนเป็นอาสาสมัคร ใน รพ.</a>
              </li>
            </ul>
          </li>
          <li class="menu-has-children">
            <a href="">ชุดความรู้อาสาสมัครใน รพ.</a>
            <ul>
              <li>
                <a href="index.php#services">คู่มืออาสาสมัคร ใน รพ.</a>
              </li>
              <li>
                <a href="index.php#services">การเตรียมความพร้อมเบื้องต้น สำหรับอาสาสมัครในโรงพยาบาล</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#portfolio">แกลอรี่</a>
          </li>
          <li class ="<?php if($page == 'relation'){echo 'menu-active';} ?>">
            <a href="relation.php">ประชาสัมพันธ์</a>
          </li>
          <li class ="<?php if($page == 'article'){echo 'menu-active';} ?>">
            <a href="article.php">บทความ</a>
          </li>
          <footer class="nav-logo" >

          </footer>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

<!-- Modal -->
<?php include "php/regis_modal.php";?>