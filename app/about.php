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
    <br>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            <h1 class="align-center" style="text-align: center;">VỀ CHÚNG TÔI</h1>
            <p>Công ty ChipChip Shop là công ty chuyên phân phối các sản phẩm cặp balo chính hãng từ các nhà sản xuất trên thế giới, đã mở cửa được 2 năm và đạt nhiều con số ấn tượng, với đội ngũ nhân viên giàu kinh nghiệm cũng như làm việc với tiêu chi đặt chất lượng và sự hài lòng của khách hàng lên làm đầu, chúng tôi luôn phấn đấu để mang lại những giá trị hữu ích nhất cho khách hàng.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4">
            <img src="../public/uploads/21.png">
        </div>
        <div class="col-md-4">
            <img src="../public/uploads/22.png">
        </div>
        <div class="col-md-4">
            <img src="../public/uploads/23.png">
        </div>
      </div>
    </div>
    <br>
    <!-- Page Content -->
    <div class="container" style="background-color: ">
      <div class="row">
        <div class="col-md-3">
          <h6>Nhận khuyến mãi ngay khi liên hệ với chúng tôi!!!</h6>
          <p class="text-muted"><strong>*</strong><a href="services.php" target="_blank">ChipChip Shop</a>.</p>
        </div>
        <div class="col-md-3">
          <p style="font-size: 12px;text-transform: uppercase;font-weight: 700;margin-bottom: 10px;">Chính sách hoạt động</p>
            <div class="CSHD" style="padding-left: 10px; padding-top: 0px;">
              <!--<li><a href="/ve-vnexpress-ecommerce">Về VnExpress eCommerce</a></li>-->
              <span class="glyphicon glyphicon-ok"><a href="#" style="color: black" rel="nofollow">Chính sách bảo mật</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Chính sách thanh toán</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Chính sách giao hàng</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Chính sách đổi trả</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Chính sách bảo hành</a></span><br>
            </div>
        </div>
        <div class="col-md-3">
          <p style="font-size: 12px;text-transform: uppercase;font-weight: 700;margin-bottom: 10px;">Chính sách hoạt động</p>
            <div class="CSHD" style="padding-left: 10px; padding-top: 0px;">
              <!--<li><a href="/ve-vnexpress-ecommerce">Về VnExpress eCommerce</a></li>-->
              <span class="glyphicon glyphicon-ok"><a href="/chinh-sach-bao-mat" rel="nofollow" style="color: black">Hợp tác đối tác</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Cơ hội hợp tác</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">liên hệ hợp tác</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">liên hệ quảng cáo</a></span><br>
            </div>
        </div>
        <div class="col-md-3">
          <p style="font-size: 12px;text-transform: uppercase;font-weight: 700;margin-bottom: 10px;">Chính sách hoạt động</p>
            <div class="CSHD" style="padding-left: 10px; padding-top: 0px;">
              <!--<li><a href="/ve-vnexpress-ecommerce">Về VnExpress eCommerce</a></li>-->
              <span class="glyphicon glyphicon-ok"><a href="#" rel="nofollow" style="color: black">Quy chế hoạt động</a></span><br>
              <span><a href="#" rel="nofollow" style="color: black">Giải quyế tranh chấp, khiếu nại</a></span><br>
            </div>
        </div>
      </div>
    </div>
    <br>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php unset($_SESSION["flash"]); ?>
