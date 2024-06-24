<?php
session_start();
ob_start();

require_once 'app/modal/database.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ProductController.php';
require_once 'app/controller/UserController.php';
require_once 'app/controller/CategoryController.php';
require_once 'app/controller/MovieController.php';
require_once 'app/view/Header/header.php';

$data = [];

if (isset($_GET['page'])) {
    $page = $_GET['page'] ?? '';
    $id = $_GET['id'] ?? '';
    switch ($page) {
        case 'detail':
            $detail = new ProductController();
            $detail->detail();
            break;
        case 'genre':
            $genre = new UserController();
            $genre->viewMovieGenre('genre');
            break;
        case 'coming':
            $comingUp = new UserController();
            $comingUp->viewComingUp('coming');
            break;
        case 'tvshow':
            $tvshow = new UserController();
            $tvshow->viewTvShows('tvshow');
            break;
        case 'blog':
            $blog = new UserController();
            $blog->viewBlog('blog');
            break;
        case 'categorymovie':
            $categorymovie = new CategoryController();
            $categorymovie->index();
            break;
        case 'category':
            $categoryController = new CategoryController();
            if ($id) {
                $categoryController->showMoviesByCategoryId($id);
            } else {
                $categoryController->index();
            }
            break;
        case 'playmovie':
            require_once 'app/view/PlayMovie/playmovie.php';
            break;
        case 'cart':
            require_once 'app/view/Cart/cart.php';
            break;
        case 'checkout':
            require_once 'app/view/Checkout/checkout.php';
            break;
        // case 'signin':
        //     $userController = new UserController();
        //     $userController->viewSign();
        //     break;
        case 'login':
            $userController = new UserController();
            $userController->viewSign();
            break;
        case 'signout':
            session_unset();
            header('location:index.php');
            break;
        case 'adminproduct':
            if (!isset($_SESSION['userID']) || $_SESSION['role'] != 1) {
                header('Location: index.php');
                exit;
            }
            require_once 'public/admin/index.php';
            break;
        default:
            $home = new HomeController();
            $home->home();
            break;
    }
} else {
    $home = new HomeController();
    $home->view($data);
}

require_once 'app/view/Footer/footer.php';
?>