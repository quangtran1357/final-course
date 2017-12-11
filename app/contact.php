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
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?>
        </i>
      </div>
        <div class="container">

            <div class="row">

                <div class="col-lg-10 col-lg-offset-2">

                    <h1>Hãy Liên Hệ Với Chúng Tôi <a href="#">ChipChipShop.VN</a></h1>

                    <p class="lead">Hãy liên hệ với chúng tôi để nhận thống báo về các sản phẩm một cách nhanh nhất cũng như trải nghiêm những chương trình giảm giá hấp dẫn nhất!!! Hãy điền các thông tin ở dưới và nhấn gửi như ^.^</p>


                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Làm ơn hãy nhập tên bạn ở đây *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Làm ơn hãy nhập họ và chữ lót bạn ở đây *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Làm ơn hãy nhập Email bạn ở đây *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Làm ơn hãy nhập số điện thoại bạn ở đây *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Nhắn tin cho chúng tôi, chúng tôi sẽ rất vui nếu nhận được các ý kiến đóng góp cũng như lời động viên của các bạn. *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong>Mọi thắc mắc xin liên hệ qua số điện thoại <a href="#" target="_blank">01684808673</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <!-- /.col-lg-3 -->

        <!-- /.col-lg-9 -->

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
<?php unset($_SESSION["flash"]); ?>
