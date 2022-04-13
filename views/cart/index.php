<div class="col-md-8 pt-0 mb-3">
    <h1 class="text-white d-flex justify-content-center">Cart Shop</h1>

    <table class="table table-dark table-hover ">
        <thead>
            <tr>
                <th>IMAGE</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>UNITS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($cart as $index=> $element):
                $product= $element['product'];
            ?>
            <tr>
                <td>
                    <?php if($product->image != null): ?>
                    <img class="card-img-top img-fluid " src="<?=base_url?>uploads/<?=$product->image?>" style="height: 80px; width: 80px;" alt="" />
                    <?php else:?>
                    <img class="card-img-top img-fluid carrito-image" src="<?=base_url?>img/shirtaz.png" style="height: 80px; width: 80px;" alt="" />
                    <?php endif; ?>
                </td>
                <td><a href="<?=base_url?>Product/look&id=<?=$product->id?>" class="text-decoration-none"><?=$product->name?></a></td>
                <td><?=$product->price?></td>
                <td><?=$element['unit']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>