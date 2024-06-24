<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Categories</h4>
            <div>
                <a href="index.php?action=addCategory"><button type="button" class="btn btn-primary">
                        Add Category
                    </button></a>
            </div>
        </div>
        <!-- <a href="index.php?action=addCategory">Add Category</a> -->
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Genre</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php foreach ($categories as $index => $category): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo $category['cateID']; ?></td>
                            <td><?php echo $category['genre']; ?></td>
                            <td>
                                <a href="index.php?action=editCategory&cateID=<?php echo $category['cateID']; ?>">Edit</a>
                                <span style="color:#42d0ed">|</span>
                                <a href="index.php?action=deleteCategory&cateID=<?php echo $category['cateID']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>    
                </tbody>
            </table>
        </div>

    </div>
</div>