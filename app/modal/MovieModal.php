<?php
require_once 'app/modal/database.php';
require_once 'app/modal/ProductModal.php';
class MovieModal
{
    private $db;
    private $product;
    public function __construct()
    {
        $this->db = new Database();
        $this->product = new ProductModal();

    }


    public function pushTimeDuration()
    {

    }

    public function getHistoryTimeDuration()
    {

    }

    public function getHistoryEpisode()
    {

    }

    public function pushHistoryEpisode()
    {

    }
}
?>