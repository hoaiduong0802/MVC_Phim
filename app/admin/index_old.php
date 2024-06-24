<?php
require_once 'controller/AdminController.php';
require_once 'C:\xampp\htdocs\phim\config.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';

$adminController = new AdminController();

switch ($action) {
    case 'dashboard':
        $adminController->dashboard();
        break;
    case 'addProduct':
        $adminController->addProduct();
        break;
    case 'editProduct':
        $adminController->editProduct();
        break;
    case 'deleteProduct':
        $adminController->deleteProduct();
        break;
    case 'addCategory':
        $adminController->addCategory();
        break;
    case 'deleteCategory':
        $adminController->deleteCategory();
        break;
    case 'editCategory':
        $adminController->editCategory();
        break;
    default:
        $adminController->dashboard();
        break;
}
?>