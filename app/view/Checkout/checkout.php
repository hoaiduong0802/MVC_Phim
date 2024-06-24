<?php
require_once 'app/controller/MovieController.php';

// Check if the form has been submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller = new MovieController();
    $success = $controller->checkout();
} else {
    echo "Invalid request method.";
    exit;
}
?>

<section class="checkout" style="padding-top: 90px;">
    <div class="container">
        <?php if (isset($success) && $success): ?>
            <h2 class="title">THANH TOÁN</h2>
            <p class="content">
                Cảm ơn bạn đã mua Platinum Movie Pass tại BHZ Movie! Mã đơn hàng x1y2z3d4 của bạn đã được thanh toán thành
                công.
                Thời hạn sử dụng của bạn kéo dài đến ngày 11/6/2024, tính từ thời điểm mua.

                Hãy tận hưởng những bộ phim tuyệt vời và chúc bạn có những trải nghiệm thú vị tại rạp của chúng tôi! 🎥🍿
            </p>
        <?php else: ?>
            <h2 class="title">THANH TOÁN THẤT BẠI</h2>
            <p class="content">
                Rất tiếc, đã có lỗi xảy ra trong quá trình thanh toán. Vui lòng thử lại.
            </p>
        <?php endif; ?>
    </div>
</section>