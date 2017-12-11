<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/doanphp/final-course/app/admin/");
?>
<?php
  unset($_SESSION["../login"]);
  header("location: http://localhost/doanphp/final-course/app/index.php");
?>
