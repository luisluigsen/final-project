<div class="col-md-8 pt-0 mb-3">
    <?php if(isset($manage)): ?>
        <h1 class="text-light d-flex justify-content-center">Manage orders</h1>
    <?php else: ?>
        <h1 class="text-light d-flex justify-content-center">My orders</h1>
    <?php endif; ?>
        <table class="table table-dark table-hover ">
                <thead>
                    <tr>
                        <th>Nº Order</th>
                        <th>COST</th>
                        <th>DATE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($ord = $orders->fetch_object()): ?>
                    <tr>
                        <td><a href="<?=base_url?>Order/detail&id=<?= $ord->id ?>" class="text-decoration-none"><?= $ord->id ?></a></td>
                        <td><?= $ord->cost ?>€</td>
                        <td><?= $ord->date ?></td>
                        <td><?=Utils::showStatus($ord->status)?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
                <?php $stats = Utils::statsCart();?>
            </table>
            <h3 class="text-light">Total Price <?=$stats['total']?>€</h3>
            <a href="<?=base_url?>Order/make" class="btn btn-outline-success">Edit</a> 
</div>