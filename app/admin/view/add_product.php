<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form method="POST" action="index.php?action=handle_form_submission"
                            enctype="multipart/form-data">
                            <label for="category_id">Danh mục sản phẩm</label>
                            <select name="genre" id="category_id" class="form-control" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['genre'] ?>"><?= $category['genre'] ?></option>
                                <?php endforeach; ?>
                            </select><br>

                            <label for="name">Tên sản phẩm</label>
                            <input type="text" name="name" id="name" class="form-control" required><br>

                            <label for="views">Lượt xem</label>
                            <input type="text" name="views" id="views" class="form-control" required><br>

                            <label for="img">Hình ảnh</label>
                            <input type="file" name="img" id="img" class="form-control" required><br>

                            <input type="submit" value="Thêm sản phẩm" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>