<?php
require_once "BaseModel.php";

function selectAllProduct()
{
    $sql = "SELECT * FROM product";
    return getData($sql);
}

function insertProduct($name,$category, $price, $discount, $description, $size, $color, $quantity, $imageUrl)
{
    $sql = "INSERT INTO product (name, category_id, price, discount, description, image) VALUES ('$name', '$category', '$price', '$discount', '$description', '$imageUrl')";
    getData($sql);
    function getLastProductID()
    {
    $sql = "SELECT id FROM product ORDER BY id DESC LIMIT 1";
    return getData($sql);
    }
    $productID = getLastProductID();
    foreach ($productID as $item){
        extract($item);
    }
    $proID = $item["id"];
    $sql = "INSERT INTO product_variant (product_id, size, color, quantity) VALUES ('$proID', '$size', '$color', '$quantity')";
    getData($sql);
}