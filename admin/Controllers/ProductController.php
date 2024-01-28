<?php
require_once "Models/ProductModel.php";

function listProduct()
{
    $products = selectAllProduct();
    include_once "Views/Product/ListProduct.php";
}
function addProductPage()
{
    $categorys = selectAllCategory();
    include_once "Views/Product/AddProduct.php";
}

function addProduct()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];
        $size = $_POST['size'];
        $color = $_POST['color'];
        $quantity = $_POST['quantity'];
        $targetDir = "upload/img/";
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];
        $targetFile = $targetDir . basename($image_name);
        
        move_uploaded_file($image_tmp, $targetFile);
        
        $imageUrl = $targetFile;
        insertProduct($name,$category, $price, $discount, $description, $size, $color, $quantity, $imageUrl);
        header("Location: index.php?url=list-product.php");
        exit();
    }
    
    
}