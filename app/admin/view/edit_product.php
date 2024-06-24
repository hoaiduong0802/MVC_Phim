<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
</head>

<body>
    <h1>Add Product</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['genre'] ?>"><?= $category['genre'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="img">Image:</label>
        <!-- Sử dụng một biến để xác định liệu biểu mẫu đang được sử dụng để thêm sản phẩm mới hay chỉnh sửa sản phẩm hiện có -->
        <?php $isEdit = isset($product); ?>
        <input type="file" id="img" name="img" <?= $isEdit ? '' : 'required' ?>><br>

        <label for="views">Views:</label>
        <input type="number" id="views" name="views" required><br>

        <input type="submit" value="<?= $isEdit ? 'Update Product' : 'Add Product' ?>">
    </form>
</body>

</html>