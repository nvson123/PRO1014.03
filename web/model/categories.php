<?php
function add_categories($addCategories){
    $sql = "insert into category(name) values('$addCategories')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id=" .$id;
    pdo_execute($sql);
}

function loadall_categories(){
    $sql = "select * from category order by id desc";
      $listCategories = pdo_query($sql);
      return $listCategories;
}

function loadone($id){
    $sql = "select * from danhmuc where id=" .$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id,$tenloai){
    $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}


?>