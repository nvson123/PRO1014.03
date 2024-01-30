<?php
session_start();
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "view/header.php";
include "model/account.php";
include "model/pdo.php";
if (!isset($_SESSION['role']))
    $_SESSION['role'] = [];

// include "view/products/shop.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "shop":
            //tìm kiêm sản phẩm
            if (isset($_POST['kyw']) && $_POST['kyw'] != 0) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            // if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
            //     $iddm = $_GET['iddm'];
            // } else {
            //     $iddm = 0;
            // }
             $dssp = loadall_sanpham($kyw, $iddm);
            // // $tendm = load_ten_dm($iddm);

            
            include "view/products/shop.php";
            break;

        // include "./view/products/sanpham.php";
        case "account":
            include "view/account.php";
            break;
    
        case "login":
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = checkuser($username, $password);
                $role = $kq['role'];
                if ($role == 1) {
                    $_SESSION['role'] = $role;
                    header('location:admin/index.php');
                } else if (is_array($kq)) {
                    $_SESSION['role'] = $role;
                    $_SESSION['id'] = $kq['id'];
                    $_SESSION['email'] = $kq['email'];
                    header('location:index.php');
                } else {
                    // $thongbao = "Tài khoản không tổn tại. Vui lòng kiểm tra lại";
                    header('location:index.php?act=login');
                }
            }
            include "./view/account/login.php";
            break;
        case "dangky":
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];

                insert_taikhoan($username, $email, $password, $address, $phone_number);
                $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chúc năng";
                
            }
            include "view/account/dangky.php";
            break;


        case "ctsp":
            // if (condition) {
            //     # code...
            // }else{
            include "view/products/chitietsanpham.php";
            break;
        // }

        case "contact":
            include "view/contact.php";
            break;
        case "compare":

            include "view/products/compare-product.php";
            break;
        case "wishlist":
            include "view/products/wishlist.php";
            break;
        case "cart":
            include "view/checkout/shop-cart.php";
            break;
        case "about":
            include "view/about.php";
            break;
        case "blog":
            include "view/blog/blog.php";
            break;

    }
} else {
    include "view/home.php";
}
include "view/aside.php";
include "view/footer.php";


?>