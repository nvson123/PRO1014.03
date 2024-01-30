<?php
session_start();

include "../model/pdo.php";
include "../model/account.php";
if ((isset($_POST['login'])) && ($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = checkuseradmin($username, $password);
  $_SESSION['role'] = $role;
  if ($_SESSION['role'] == 1){
    header('location: index.php');
  }else {
    $txt_erro = "Tài khoản và mật khẩu không tồn tại!";
  } 
}
?>
 <!-- <div class="col-xl-4 form-login">
            <div class="card form-gr"> -->
            <div class="dangnhap">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
             
      <h1>Đăng nhập</h1>
      <div>
        <input type="text" placeholder="   Tên đăng nhập" name="username">
      </div>
      <div>
        <input type="password" name="password" placeholder="   Mật khẩu">
      </div>
      <div class="submit">
        <input type="submit" value="Đăng nhập" name="login">
      </div>

      
      <div>
        <p>Bạn quên mật khẩu? <a href="#">Lấy lại mật khẩu</a></p>
        <p>Bạn chưa có tài khoản? <a href="#">Đăng kí tài khoản</a></p>
      </div>
      <h5>Hoặc</h5>
      <div class="khac">
        <a href=""><input type="submit" value="Facebook"></a>
        <a href=""><input type="submit" value="Google"></a>
      </div>
      <div style="margin:10px 0px 0px 20px  ;">
                        <?php
                        if (isset($txt_erro) && ($txt_erro != "")) {
                          echo "<font color='red'>" . $txt_erro . "</font>";
                        }
                        ?>
                      </div>
                 <!-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div>
                       <input type="submit" value="Đăng nhập" name="login">
                    </div>  -->
                    
                </form>
            </div>
        <!-- </div>
</div> -->

<style>
  .dangnhap {
    width: 450px;
    margin: auto;
    margin-top: 20px;

  }

  .dangnhap h1 {
    text-align: center;
  }

  .dangnhap input {
    margin-top: 20px;
    margin-left: 20px;
    width: 400px;
    height: 35px;
  }

  .submit input {
    width: 408px;
    margin-left: 20px;
    margin-top: 20px;
    height: 40px;
    background-color: black;
    color: white;
  }

  .submit input:hover {
    background-color: white;
    color: black;
  }

  .dangnhap p {
    margin-left: 20px;
    margin-top: 10px;
  }

  .dangnhap a {
    text-decoration: none;
    color: black;
    font-weight: bold;

  }

  .dangnhap a:hover {
    color: red;
    text-decoration: underline;
  }

  .dangnhap h5 {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
    color: red;
  }

  .khac {
    display: grid;
    grid-template-columns: 200px 200px;
  }

  .khac input {
    width: 198px;
    margin-top: 5px;
    background-color: white;
    color: black;
  }

  .khac input:hover {
    background-color: black;
    color: white;
  }
</style>
