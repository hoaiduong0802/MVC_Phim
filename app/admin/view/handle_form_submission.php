<?php
require_once '../../app/admin/controller/AdminController.php';
require_once '../../app/modal/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $img = $_FILES['img']['name']; // Lấy tên file ảnh
    $img_temp = $_FILES['img']['tmp_name']; // Lấy đường dẫn tạm của file ảnh
    $views = $_POST['views'];

    // Thực hiện upload ảnh vào thư mục upload/img
    $upload_dir1 = "../../upload/img/" . $img;
    $upload_dir2 = "../../img/" . $img;

    if (move_uploaded_file($img_temp, $upload_dir1)) {
        // Sao chép tệp vào thư mục thứ hai
        if (copy($upload_dir1, $upload_dir2)) {
            // Khởi tạo đối tượng AdminProductModal
            $productModal = new AdminProductModal();

            // Thêm sản phẩm vào bảng product
            $result = $productModal->addProduct($name, $genre, $img, $views);
            if ($result) {
                echo '<script type="text/javascript">';
                echo 'window.location.href="index.php?action=dashboard";';
                echo '</script>';
            } else {
                // Xử lý trường hợp thêm sản phẩm không thành công (nếu cần)
                // Ví dụ: Hiển thị thông báo lỗi
                echo "Thêm sản phẩm không thành công!";
            }
        } else {
            echo "Lỗi khi sao chép file vào thư mục thứ hai!";
        }
    } else {
        echo "Lỗi khi upload file vào thư mục đầu tiên!";
    }
}
?>