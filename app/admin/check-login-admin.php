<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/doanphp/final-course/app/admin/");
?>
<?php
  if (!isset($_SESSION["../login"])) {
      $_SESSION["flash"] = "Ban ko co quyen ";
      header("location:http://localhost/doanphp/final-course/app/index.php");
  }
?>
