<?php

function viewCart()
{
  global $img_path;
  //code wrote by nv son and youtube
  $tong = 0;
  $i = 0;
  foreach ($_SESSION['mycart'] as $cart) {
    $linkSP = "index.php?act=ctsp&id=" . $cart[0];
    $hinh = $img_path . $cart[2];
    $tong += $cart[5];
    // $xoasp= ' <a  href="index.php?act=delCart&idCart='.$i.'"><i class="fa fa-trash-o"></i></a>';
    $xoasp = "index.php?act=delCart&idCart=$i";
    $i += 1;
  }

}
;
function tongTien()
{
  $tong = 0;
  //code wrote by nv son and youtube


  foreach ($_SESSION['mycart'] as $cart) {

    $tien = $cart[3] * $cart[4];
    $tong += $tien;


  }
return $tong;
};



function insert_bill($name,$email,$address,$tel,$ngayDatHang,$tongDonHang){

$sql = "INSERT INTO orders(id, user_id, fullname, email,
 phone_number, address, note, order_date, total_money) VALUES('','','$name','$email',$tel,'$address','','','$ngayDatHang',$tongDonHang)";
pdo_execute($sql);
}

;
?>