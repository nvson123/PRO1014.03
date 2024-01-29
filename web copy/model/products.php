<?php
function loadall_products_home()
{
    // $sql="SELECT * FROM product ORDER BY id DESC LIMIT 0, 9";
    $sql = "SELECT product.*, category.name AS category_name
    FROM product
    JOIN category ON product.category_id = category.id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_product($id)
{
    $sql = "select * from product where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function loadAll_dmProducts($iddm)
{
    $sql = "SELECT * FROM product
    WHERE category_id = $iddm";
    $dmSp = pdo_query($sql);
    return $dmSp;
}
?>