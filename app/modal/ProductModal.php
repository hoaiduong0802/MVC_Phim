<?php
require_once 'app/modal/database.php';

class ProductModal
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM product";
        return $this->db->getAll($sql);
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCate()
    {
        $sql = "SELECT * FROM category";
        return $this->db->getAll($sql);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM category WHERE cateID = :id";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getProductsByCategory($productId, $categoryId)
    {
        $sql = "SELECT * FROM product WHERE movieID = :categoryId AND movieID <> :productId";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':categoryId', $categoryId);
        $stmt->bindParam(':productId', $productId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMoviesByGenre($genre)
    {
        $sql = "SELECT * FROM product WHERE genre = :genre";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->bindParam(':genre', $genre);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMovieById($id)
    {
        // Lấy thông tin phim theo ID
        $query = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getGenreById($categoryId)
    {
        $query = "SELECT genre FROM category WHERE cateID = :categoryId";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getMoviesByCategoryId($categoryId)
    {
        // Lấy thể loại từ categoryId
        $genreQuery = "SELECT genre FROM category WHERE cateID = :categoryId";
        $genreStmt = $this->db->getConnection()->prepare($genreQuery);
        $genreStmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $genreStmt->execute();
        $genreResult = $genreStmt->fetch(PDO::FETCH_ASSOC);

        if ($genreResult) {
            $genre = $genreResult['genre'];

            // Lấy các phim theo thể loại
            $movieQuery = "SELECT * FROM product WHERE genre = :genre";
            $movieStmt = $this->db->getConnection()->prepare($movieQuery);
            $movieStmt->bindParam(':genre', $genre);
            $movieStmt->execute();
            return $movieStmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }
    
    public function getMoviePass(){
        $moviePassQuery = "SELECT * FROM moviepass";
        return $this->db->getAll($moviePassQuery);
    }
}
?>