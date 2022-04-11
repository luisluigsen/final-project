<div class="col-md-8 pt-0 mb-3">
    <table class="table table-dark table-hover table-bordered border-success">
        <h1 class="text-white bg-success pb-2 ps-2">Manage Categories</h1>
        <?php if (isset($_SESSION['category']) && $_SESSION['category'] == 'complete') : ?>
            <div class="container">
                <h2 class="text-success">Category has been edit correctly</h2>
            </div>
        <?php elseif (isset($_SESSION['category']) && $_SESSION['category'] != 'complete') : ?>
            <div class="container">
                <h2 class="text-danger">Category has not been edit correctly</h2>
            </div>
        <?php endif; ?>
        <?php Utils::deleteSession('category'); ?>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th class="d-flex justify-content-center">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($cat = $categories->fetch_object()) : ?>
                <tr>
                    <td><?= $cat->id; ?></td>
                    <td><?= $cat->name; ?></td>
                    <td class="d-flex justify-content-end">
                        <a href="<?= base_url ?>Category/edit&id=<?= $cat->id; ?> " class="btn btn-outline-success" role="button"><i class="fa fa-pen text-success"></i></a>
                        <a href="<?= base_url ?>Category/delete&id=<?= $cat->id; ?> " class="btn btn-outline-danger " role="button"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
        </tbody>
    <?php endwhile; ?>
    </table>
    <a href="<?= base_url ?>Category/create" class="btn btn-outline-success" role="button">Add Category</a>

</div>