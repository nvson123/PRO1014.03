<?php
include "../model/pdo.php";
include "header.php";
include "aside.php";
include "../model/categories.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "addproducts":



            include "addProducts.php";
            break;
        case "caterogies":
            $categories= loadall_categories();
            include "danhmuc/caterogies.php";
            break;
        case "addCaterogies";
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $addCategories = $_POST['categories'];
                add_categories($addCategories);
                $thongbao = "them thanh cong";
            }
            include "danhmuc/addCaterogies.php";
            break;



        case "products":
            include "products";
            break;
        case "user":
            include "user.php";
            break;
    }
} else {
    include "thongke.php";
}


include "footer.php";

?>