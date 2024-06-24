<?php
require_once 'app/modal/CategoryModal.php';
require_once 'app/modal/ProductModal.php';
require_once 'app/modal/MovieModal.php';
require_once 'app/modal/database.php';

class MovieController
{
    private $movie;
    private $productModel;
    private $data = [];
    private $db;

    function __construct()
    {
        $this->movie = new MovieModal();
        $this->productModel = new ProductModal();
        $this->db = new Database();
    }

    public function checkout()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userID = $_POST['userID'];
            $price = $_POST['price'];
            $img = $_POST['img'];
            $expiredAt = $_POST['expiredAt'];
            $mpid = 1; // This should be determined based on the context of your application
            $purchaseDate = date('Y-m-d H:i:s');

            $sql = "INSERT INTO usermoviepass (userID, mpid, purchaseDate, expiredDate) VALUES (?, ?, ?, ?)";
            $params = [$userID, $mpid, $purchaseDate, $expiredAt];

            return $this->db->execute($sql, $params);
        } else {
            return false;
        }
    }
}

// Handle the request in `checkout.php`
// The controller handling part was already shown in `checkout.php`
?>