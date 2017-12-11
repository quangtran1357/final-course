<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../check-login.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from catalogs where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $description = $row["description"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tạo Mới Danh Mục</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <?php include "../../menucon.php" ?>
  <div class="wrapper">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Chỉnh Sữa Danh Mục</h1>
      </div>
      <div class="row">
        <label>Tên Danh Mục:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>description:</label>
        <textarea class="form-control" name="description" value="<?php echo $description; ?>"></textarea>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </body>
  <script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</html>
<?php unset($_SESSION["flash"]); ?>
