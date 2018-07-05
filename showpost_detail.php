<?php
require_once "admin/connect_db.php";
require_once "admin/function.php";
$IdTopic = $_GET['IdTopic'];
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/activity.css" rel="stylesheet">

  <style>
  table{
     width:100% !important;
     border: none !important;
  }
  td{
    border: none !important;
  }
  </style>
  
  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <?php $page = "relation"; include "php/header.php";?>

  <main id="main">

    <!--==========================
      content
    ============================-->

    <section id="content" class="wow fadeInUp">
      <div class="container text-center">
      <?php
    $sql = "SELECT autopage4_data_topic.IdTopic , autopage4_page_topic.DataDetail , autopage4_page_topic.TitleDetail ";  
    $sql .= "FROM autopage4_page_topic ";
    $sql .= "INNER JOIN autopage4_data_topic ON autopage4_data_topic.IdTopic = autopage4_page_topic.IdTopic ";
    $sql .= "AND autopage4_data_topic.IdTopic = $IdTopic";
    $result = $connection -> query($sql);
    while($row = mysqli_fetch_array($result)) 
    {
    ?>
        <h2 class="pb-3"><? echo ThaiIToUTF8($row['TitleDetail']);?></h2>
        <hr>
        <div><?echo ThaiIToUTF8($row['DataDetail']);?></div>
        <?}?>
    </div>

    </section><!-- #content -->



  </main>

  <?php include "php/footer.php"; ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

