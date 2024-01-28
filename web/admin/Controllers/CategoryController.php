<?php
require_once "Models/CategoryModel.php";
function listCategory()
{
    $categories = selectAllCategory();
    include_once "Views/Category/ListCategory.php";
}
function deleteCategory($id)
{
    delCategory($id);
    header('Location:index.php?url=list-category');
    exit();
}
function addCategoryPage(){
    include_once "Views/Category/AddCategory.php";
}
function addCategory($name, $description)
{
    insertCategory($name, $description);
    header('Location:index.php?url=list-category');
    exit();
}

function updateCategoryPage()
{
        $id = $_GET["id"];
        $categories = selectOneCategory($id); 
        include_once "Views/Category/UpdateCategory.php";
}

function updateCategory($id, $name, $description)
{
    updateCate($id, $name, $description);
    header('Location:index.php?url=list-category');
    exit();
}