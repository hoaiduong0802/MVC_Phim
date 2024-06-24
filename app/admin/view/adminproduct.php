<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Danh mục các sản phẩm</h4>
            <div>
                <a href="index.php?action=addproduct"><button type="button" class="btn btn-primary">
                        Thêm sản phẩm
                    </button></a>
            </div>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Thể loại</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $product['movieID']; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><img src="../../img/<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>"
                                    height="80px" width="100px"></td>
                            <td><?php echo $product['genre']; ?></td>
                            <td>
                                <a href="index.php?action=editProduct&movieID=<?php echo $product['movieID']; ?>">Edit</a>
                                <span style="color:#42d0ed">|</span>
                                <a href="index.php?action=deleteProduct&movieID=<?php echo $product['movieID']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <ul class="pagination-list">
            <li class="pagination-item">
                <a href="" class="pagination-link">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">1</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">2</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">3</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">...</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">10</a>
            </li>
            <li class="pagination-item">
                <a href="" class="pagination-link">
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>