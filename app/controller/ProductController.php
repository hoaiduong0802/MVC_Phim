<?php
require_once 'app/modal/ProductModal.php';

class ProductController
{
    private $listProduct = [];
    private $data = [];

    public function __construct()
    {
        $productModel = new ProductModal();
        $this->listProduct = $productModel->getProducts(); // Lấy toàn bộ data về từ database
    }

    public function renderView($data)
    {
        extract($data);
        require_once 'app/view/Detail/detail.php';
    }

    public function detail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            foreach ($this->listProduct as $item) {
                if ($id == $item['movieID']) {
                    $this->data = $item;
                    break;
                }
            }
            //Kiểm tra data return về từ database
            if (!empty($this->data)) { // Kiểm tra nếu dữ liệu không trống
                $productModel = new ProductModal(); // Khởi tạo đối tượng ProductModal
                if (isset($this->data['genre'])) { // Kiểm tra nếu category_id tồn tại
                    $relatedProducts = $productModel->getMoviesByGenre($this->data['genre']); // Lấy các sản phẩm liên quan
                    $this->data['relatedProducts'] = $relatedProducts; // Gán danh sách sản phẩm liên quan vào dữ liệu
                } else {
                    $this->data['relatedProducts'] = []; // Gán mảng rỗng nếu không có category_id
                }

                $this->renderView($this->data); // Hiển thị view với dữ liệu
            } else {
                echo "Không tìm thấy sản phẩm"; // Hiển thị thông báo lỗi nếu không tìm thấy sản phẩm || Return về 404. Page not Found.
            }

        } else {
            echo "No product ID specified.";
        }
    }
}
?>