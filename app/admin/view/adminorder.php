<?php
require_once 'C:\xampp\htdocs\phim\app\modal\database.php';
require_once 'C:\xampp\htdocs\phim\app\admin\controller\AdminController.php';
require_once 'C:\xampp\htdocs\phim\app\admin\modal\AdminProductModal.php';

$adminProductModal = new AdminProductModal();
$dataUserMoviePass = $adminProductModal->getAllDataUserMoviePass();
?>
<div class="col-md-12">
    <h2>Site Admin Order</h2>
</div>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>UMP ID</th>
                <th>User ID</th>
                <th>MP ID</th>
                <th>Purchase Date</th>
                <th>Expired Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataUserMoviePass as $row): ?>
                <tr>
                    <td><?php echo $row['ump_id']; ?></td>
                    <td><?php echo $row['userID']; ?></td>
                    <td><?php echo $row['mpid']; ?></td>
                    <td><?php echo $row['purchaseDate']; ?></td>
                    <td><?php echo $row['expiredDate']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>