<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/doanphp/final-course/app">ChipChip Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/doanphp/final-course/app">Trang Chủ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Services.php">Dịch Vụ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Về Chúng Tôi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Liên Hệ</a>
            </li>
            <?php if(isset($_SESSION["login"])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Đăng Xuất</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/">Admin Panel</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Đăng Nhập</a>
            </li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
