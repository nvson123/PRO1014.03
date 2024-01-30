<?php
if (isset($_SESSION['user'])) {
  //extract($_SESSION['user']);
?>
  <!-- <div class="quanly">
    <a href="index.php?act=viewcart">Đơn hàng của tôi</a> <br>
    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a> <br>
    <a href="admin/index.php">Đăng nhập Admin</a> <br>
    <a href="index.php?act=doimk">Đổi mật khẩu</a> <br>
    <a href="index.php?act=quenmk">Lấy lại mật khẩu</a> <br>
    <a href="index.php?act=thoat">Đăng xuất</a>
  </div> -->
<?php } else { ?>
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg3.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Login</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  
                  <li class="breadcrumb-sep">//</li>
                  <li>Login</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Login</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            
           
    <div class="login-form-content">
              <form action="index.php?act=login" method="POST">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username <span class="required">*</span></label>
                      <input name="username" class="form-control" type="text" placeholder="Nhập ten đăng nhập">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      <input name="password" class="form-control" type="password" placeholder="Nhâp mật khẩu">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                       <input type="submit" value="Đăng nhập" name="login">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group account-info-group mb--0">
                      <div class="rememberme-account">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Remember me</label>
                        </div>
                      </div>
                      <a class="lost-password" href="#/">Lost your password?</a>
                    </div>
                  </div>
                </div>
              </form>
              <p class="thongbao">
    <?php
     if (isset($thongbao) && ($thongbao != "")) {
      echo '<script> alert("'.$thongbao.'")</script>';
    }
    ?>
    </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End My Account Area Wrapper ==-->
  </main>
  <?php } ?>

<p class="thongbao">
  <?php
  if (isset($thongbao) && ($thongbao != "")) {
    echo $thongbao;
  }
  ?>
</p>
  