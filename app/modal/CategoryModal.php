<?php
    class CategoryModal{
        private $db;
        function __construct(){
            $this->db = new Database();
        }
        public function getCate(){
            $sql = "SELECT * FROM category";
            $result = $this->db->getAll($sql);
            if($result) {
                return $result;
            } else {
                echo ("Kiểm tra lợiiii đi, không có data mấy mẹ!"); //return false when we can't get data from sever
                return null;
            }

        }
    }
?>