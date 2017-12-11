<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/doanphp/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
  </head>
  <body style="background-color: #f5f5f5;">

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <h1 style="padding-left: 170px;">MUA HÀNG LIỀN TAY, LỜI NGAY LÃI SUẤT</h1>
        <?php include "slide2.php" ?>

        <h2 style="text-align: center; padding-left: 100px;">HÃY TỚI SHOP NGAY ĐỂ NHẬN NHỮNG ƯU ĐÃI CỰC KHỦNG</h2>
        <!-- /.col-lg-3 -->

        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
      <?php include "slide2.php" ?>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php unset($_SESSION["flash"]); ?>
