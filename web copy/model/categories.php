<?php
function add_categories($addCategories)
{
    $sql = "insert into category(name) values('$addCategories')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}

function loadall_categories()
{
    $sql = "select * from category order by id desc";
    $listCategories = pdo_query($sql);
    return $listCategories;
}

function loadone($iddm)
{
    $sql = "select * from category where id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}


// function load_name_categories($iddm)
// {
//     $sql = "select * from category where id=" . $iddm;
//     $dm = pdo_query_one($sql);
//     extract($dm);
//     return $name;
// }

?>