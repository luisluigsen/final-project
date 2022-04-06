<div class="col-md-8 pt-0 mb-3">
    <table class="table table-dark table-hover table-bordered border-success">
        <h1 class="text-white bg-success pb-2 ps-2">Manage Products</h1>
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>PRICE</td>
                <td>STOCK</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($pro= $products->fetch_object()) : ?>
                <tr>
                    <td><?= $pro->id; ?></td>
                    <td><?= $pro->name; ?></td>
                    <td><?= $pro->price; ?></td>
                    <td><?= $pro->stock; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>

    </table>
    <a href="<?= base_url ?>Product/create" class="btn btn-outline-success" role="button">Create Product</a>
</div>