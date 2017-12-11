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
  <body>
    <!-- Navigation -->
    <?php include "menu.php" ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php include "slide-left.php" ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div class="row">
            <?php
              if(isset($_GET["id"])){
                $products_id = $_GET["id"];
                $sql = "select * from products where id=$products_id";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                $row = $result->fetch_assoc(); ?>
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" style="width: 300px; height: 400px" src="<?php echo URL_IMAGE.$row['image'];?>" alt="">
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $row["name"]; ?></h3>
                      <h4><?php echo $row["price"]; ?> VNĐ</h4>
                      <p class="card-text"><?php echo $row["description"];?></p>
                      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                      4.0 stars
                      <br>
                      <a href="#" style="width: 26%;text-align: center;background: #1a58b4;border-radius: 5px;color: #fff;font-size: 13px;text-transform: uppercase;font-weight: 700;padding: 11px 0;float: left;"><img src="../public/uploads/ord.png" style="padding-right: 10px">ho vào giỏ hàng</a>
                  </div>
                </div>
                <!-- /.card -->
            <?php  }
            }
            ?>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
