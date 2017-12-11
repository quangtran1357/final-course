<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../check-login.php"; ?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>Danh Sách Chuyên Mục</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
  <?php include "../../menucon.php" ?>
  <div class="container">
  <h2>Danh sach chuyen muc</h2>
  <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"];?></i>
      </div>
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>descripson</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "select * from catalogs";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["description"]; ?></td>
              <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
              <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
          <?php   }
        }
      ?>
    </tbody>
  </table>
</div>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
