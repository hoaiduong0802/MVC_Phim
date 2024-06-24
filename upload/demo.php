<?php
session_start();
ob_start();
$listpro = [
    ['id' => 1, 'img' => 'img/latmat7.jpg', 'name' => 'Lật mặt 7', 'category' => 'Điện ảnh', 'views' => 99000],
    ['id' => 2, 'img' => 'img/nhabanu.webp', 'name' => 'Nhà bà nữ', 'category' => 'Điện ảnh', 'views' => 88000],
    ['id' => 3, 'img' => 'img/nai.jpg', 'name' => 'Mai', 'category' => 'Tâm lí', 'views' => 77000],
    ['id' => 4, 'img' => 'img/cai-gia-cua-hanh-phuc-poster.webp', 'name' => 'Cái giá của hạnh phúc', 'category' => 'Điện ảnh', 'views' => 66000],
    ['id' => 5, 'img' => 'img/datrung.webp', 'name' => 'Đất rừng phương Nam', 'category' => 'Điện ảnh', 'views' => 55000],
    ['id' => 6, 'img' => 'img/connhot.webp', 'name' => 'Con nhót mót chồng', 'category' => 'Điện ảnh', 'views' => 44000],
];
function clearCookies()
{
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, '', time() - 3600, '/');
    }
}
require_once ("app/view/header.php");
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'detail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                foreach ($listpro as $item) {
                    if ($id == $item['id']) {
                        $detail = $item;
                    }
                }
                require_once ('app/view/detail.php');
            }
            break;
        case 'signin':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $name = $_POST['id'];
                    $pass = $_POST['password'];
                    $user = [$name, $pass];
                    $_SESSION['user'] = $user;
                    header('location:index.php');
                    exit;
                }
            }
            require_once ('app/view/signin.php');
            break;
        case 'signout':
            session_unset();
            header('location:index.php');
            break;
        default:
            require_once ('index.php');
            break;
    }
} else {
    require_once ('app/view/main.php');
}
require_once ("app/view/footer.php");
?>