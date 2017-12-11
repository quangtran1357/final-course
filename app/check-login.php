<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/doanphp/final-course/app/");
?>
<?php
  if (!isset($_SESSION["login"])) {
      $_SESSION["flash"] = "Bạn không có quyền truy cập, vui lòng đăng nhập để lấy quyền truy cập";
      header("location: ".URL_SITE."index.php");
  }
?>
