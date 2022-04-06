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
                <tr>
                    <td><?= $cat->id; ?></td>
                    <td class="d-flex"><?= $cat->name; ?>
                    <td class="bg-dark">
                        <a href="<?= base_url ?>Category/edit&id=<?= $cat->id; ?> " class="btn btn-outline-success" role="button">
                            <i class="fa fa-pen text-success"></i>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url ?>Category/delete&id=<?= $cat->id; ?> " class="btn btn-outline-danger " role="button">
                            <i class="fa fa-trash text-danger"></i>
                        </a>
                    </td>
                    </td>
                </tr>
        </tbody>
    <?php endwhile; ?>
    </table>
    <a href="<?= base_url ?>Category/create" class="btn btn-outline-success" role="button">Add Category</a>

</div>