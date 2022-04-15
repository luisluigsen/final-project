<div class="col-md-8 pt-0 mb-3">
<h1 class="text-light d-flex justify-content-center">My orders</h1>
<table class="table table-dark table-hover ">
        <thead>
            <tr>
                <th>Nº Order</th>
                <th>COST</th>
                <th>DATE</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ord = $orders->fetch_object()): ?>
            <tr>
                <td><?= $ord->id ?></td>
                <td><?= $ord->cost ?>€</td>
                <td><?= $ord->date ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        <?php $stats = Utils::statsCart();?>
    </table>
    <h3 class="text-light">Total Price <?=$stats['total']?>€</h3>
    <a href="<?=base_url?>Order/make" class="btn btn-outline-success">Buy</a> 
</div>