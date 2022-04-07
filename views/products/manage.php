<div class="col-md-8 pt-0 mb-3">
    <table class="table table-dark table-hover table-bordered border-success">
        <h1 class="text-white bg-success pb-2 ps-2">Manage Products</h1>
        <?php if(isset($_SESSION['product'])&&$_SESSION['product']== 'complete'): ?>
            <div class="container">
                <h2 class="text-success">The Product has been created correctly</h2>
            </div>
        <?php elseif(isset($_SESSION['product'])&&$_SESSION['product']!='complete'):  ?>
            <div class="container">
                <h2 class="text-danger">The Product has not been created correctly</h2>
            </div>
        <?php endif; ?>  
        <?php Utils::deleteSession('product'); ?>

        <?php if(isset($_SESSION['delete'])&&$_SESSION['delete']== 'complete'): ?>
            <div class="container">
                <h2 class="text-success">The Product has been drop correctly</h2>
            </div>
        <?php elseif(isset($_SESSION['delete'])&&$_SESSION['delete']!='complete'):  ?>
            <div class="container">
                <h2 class="text-danger">The Product has not been drop correctly</h2>
            </div>
        <?php endif; ?>  
        <?php Utils::deleteSession('delete'); ?>  
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>STOCK</th>
                <th class="d-flex justify-content-center">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($pro= $products->fetch_object()) : ?>
                <tr>
                    <td><?= $pro->id; ?></td>
                    <td><?= $pro->name; ?></td>
                    <td><?= $pro->price; ?></td>
                    <td><?= $pro->stock; ?></td>
                    <td class="d-flex justify-content-end">
                        <a href="<?=base_url?>Product/edit&id=<?= $pro->id; ?>" class="btn btn-outline-success" role="button"><i class="fa fa-pen text-success"></i></a>
                        <a href="<?=base_url?>Product/delete&id=<?=$pro->id; ?>" class="btn btn-outline-danger" role="button"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>

    </table>
    <a href="<?= base_url ?>Product/create" class="btn btn-outline-success" role="button">Create Product</a>
</div>