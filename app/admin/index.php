<?php session_start(); ?>
<?php require_once "../check-login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="SHORTCUT ICON" type="text/css" href="../../public/uploads/chicken.ico">
<?php include "lib.php" ?>
<title>ChipChipShop | Dashboard</title>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "header.php" ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include "aside.php" ?>
  <?php include "menu-sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <!-- /.content-wrapper -->
  <?php include "footer.php" ?>

  <!-- Control Sidebar aside-low.php -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

</body>
</html>
