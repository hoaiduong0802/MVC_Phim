<!DOCTYPE html>
<html>

<head>
    <title>Edit Category</title>
</head>

<body>
    <h1>Edit Category</h1>
    <?php if (isset($category) && is_array($category)): ?>
        <form method="POST" action="index.php?action=editCategory">
            <input type="hidden" name="cateID" value="<?php echo $category['cateID']; ?>">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre" value="<?php echo $category['genre']; ?>" required><br>
            <input type="submit" value="Save Changes">
        </form>
    <?php else: ?>
        <p>Category not found!</p>
    <?php endif; ?>
</body>

</html>