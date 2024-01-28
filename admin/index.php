<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : '/';
require_once 'Controllers/UserController.php';
require_once 'Controllers/CategoryController.php';
require_once 'Controllers/ProductController.php';
include "Header.php";
switch ($url){
    case '/':
        include 'Views/Dashboards/Dashboards.php';
        break;
    case 'list-user':
        listUser();
        break;
    case 'delete-user':
        if (isset($_GET['id']))
        {
            deleteUser($_GET['id']);
        }
        break;
    case 'list-category':
        listCategory();
        break;
    case 'delete-category':
        if (isset($_GET['id']))
        {
            deleteCategory($_GET['id']);
        }
        break;
    case 'add-category':
        if(isset($_POST['addCategory']))
        {
            addCategory($_POST['name'], $_POST['description']);
        }
        addCategoryPage();
        break;
    case 'update-category':
        
        if(isset($_POST['updateCategory']))
        {
            updateCategory($_POST['id'], $_POST['name'], $_POST['description']);
        }
        updateCategoryPage();
        break;
    case 'list-product':
        listProduct();
        break;
    case 'add-product':
        if(isset($_POST['addProduct']))
        {
            addProduct();
        }
        addProductPage();
        break;
    default:
        include 'Views/Dashboards/Dashboards.php';
        break;
}
include "Footer.php";
