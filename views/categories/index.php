<div class="col-md-8 pt-0 mb-3">
    <table class="table table-dark table-hover table-bordered border-success">
    <h1 class="text-white bg-success pb-2 ps-2">Manage Categories</h1>

        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
            </tr>
        </thead>
        <tbody>
        <?php while ($cat = $categories->fetch_object()) : ?>
            <td><?= $cat->id; ?></td>
            <td><?= $cat->name; ?></td>
        </tbody>
        <?php endwhile; ?>
    </table>
    <a href="<?=base_url ?>Category/create" class="btn btn-outline-success" role="button">Add Category</a>
    
</div>