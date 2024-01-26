<?php
include "header.php";
include "aside.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "addproducts":
            include "addProducts.php";
            break;
        case "caterogies":
            include "caterogies.php";
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