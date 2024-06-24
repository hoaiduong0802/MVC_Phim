<?php
require_once '../../app/admin/controller/AdminController.php';
require_once 'C:\xampp\htdocs\phim\app\modal\database.php';

class AdminProductModal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM product";
        return $this->db->getAll($sql);
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM product WHERE movieID = $id";  // Sửa 'id' thành 'movieID'
        return $this->db->getOne($sql);
    }

    public function addProduct($name, $genre, $img, $view)
    {
        $sql = "INSERT INTO product (name, img, view, genre) VALUES (:name, :img, :view, :genre)";
        $params = array(':name' => $name, ':img' => $img, ':view' => $view, ':genre' => $genre);
        return $this->db->execute($sql, $params);
    }

    public function updateProduct($id, $name, $img, $views)
    {
        $sql = "UPDATE product SET name = :name, img = :img, view = :views WHERE movieID = :id";  // Sửa 'views' thành 'view'
        $params = array(':name' => $name, ':img' => $img, ':views' => $views, ':id' => $id);
        return $this->db->execute($sql, $params);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE movieID = :id";
        $params = array(':id' => $id);
        return $this->db->execute($sql, $params);
    }

    // New method to get all data from usermoviepass
    public function getAllDataUserMoviePass()
    {
        $sql = "SELECT * FROM usermoviepass";
        return $this->db->getAll($sql);
    }
    public function getTotalUsers()
    {
        $sql = "SELECT COUNT(DISTINCT userID) AS totalUsers FROM usermoviepass";
        $result = $this->db->getOne($sql);
        return $result['totalUsers'];
    }
    public function getTotalMoviePass()
    {
        $sql = "SELECT COUNT(*) AS totalMoviePass FROM moviepass";
        $result = $this->db->getOne($sql);
        return $result['totalMoviePass'];
    }
    public function getMostPurchasedMoviePass()
    {
        $sql = "SELECT mpID, COUNT(*) as purchaseCount FROM usermoviepass GROUP BY mpID ORDER BY purchaseCount DESC LIMIT 1";
        $result = $this->db->getOne($sql);
        return $result;
    }
    public function getMoviePassPurchaseCounts()
    {
        $sql = "SELECT mpID, COUNT(*) as purchaseCount FROM usermoviepass GROUP BY mpID";
        return $this->db->getAll($sql);
    }

}
?>