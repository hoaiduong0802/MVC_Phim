<?php
require_once '../../app/modal/database.php';
require_once '../../config.php';
require_once '../../app/admin/controller/AdminController.php';

require_once '../../app/admin/view/sidebar.php';
//Cấu trúc dùng chung một Admin Controller cho All Module
$adminController = new AdminController();
//Thay đổi cấu trúc urlHTTP resquest sang thành action Callback() module
if (isset($_GET['action'])) {
    $page = $_GET['action'] ?? '';
    switch ($page) {
        case 'dashboard':
            $adminController->dashboard();
            break;
        case 'adminproduct':
            $adminController->homeproduct();
            break;
        case 'admincategory':
            $adminController->categoryadminPro();
            break;
        case 'adminchart':
            $adminController->adminchart();
            break;
        case 'listuser':
            $adminController->listuser();
            break;
        case 'orderpage':
            $adminController->orderpage();
            break;
        case 'revenue':
            $adminController->revenuepage();
            break;
        case 'notice':
            $adminController->noticepage();
            break;
        case 'addproduct':
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
        case 'handle_form_submission':
            require_once '../../app/admin/view/handle_form_submission.php';
            break;
        default:
            $adminController->dashboard();
            break;
    }
}
require_once '../../app/admin/view/footer.php';
?>