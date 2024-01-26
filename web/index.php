<?php
include "view/header.php";
// include "view/products/shop.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "shop":
            include "view/products/sanpham.php";
            break;
        case "account":
            include "view/account/account.php";
            break;
        case "login":
            include "view/account/login.php";
            break;
        case "dangky":
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

        case "wishlist":
            include "view/products/wishlist.php";
            break;
        case "cart":
            include "view/checkout/shop-cart.php";
            break;
        case "about":
            include "view/about.php";
            break;

    }
} else {
    include "view/home.php";
}
include "view/aside.php";
include "view/footer.php";


?>