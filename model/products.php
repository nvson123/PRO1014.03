<?php
function loadall_sanpham($kyw="", $iddm=0){
    $sql="select * from product where 1";
    if($kyw !=""){
        $sql .= " and name like '%" .$kyw. "%' ";
    }
    if($iddm >0){
        $sql .= " and iddm = '".$iddm."' ";
    }
    $sql.=" order by id desc";
    $listSanPham=pdo_query($sql);
    return $listSanPham;
}
?>