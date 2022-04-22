<div class="col-md-8 pt-0 mb-3">
    <?php if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>=1) : ?>
        <h1 class="text-white d-flex justify-content-center">Add to Cart <i class="fa fa-cart-arrow-down pt-1"
                aria-hidden="true"></i></h1>

        <table class="table table-dark table-hover ">
            <thead>
                <tr>
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>UNITS</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach($cart as $index=> $element):
                    $product= $element['product'];
            ?>
                <tr>
                    <td class="d-flex justify-content-center">
                        <?php if($product->image != null): ?>
                        <img class="card-img-top img-fluid " src="<?=base_url?>uploads/<?=$product->image?>"
                            style="height: 80px; width: 80px;" alt="" />
                        <?php else:?>
                        <img class="card-img-top img-fluid carrito-image" src="<?=base_url?>img/shirtaz.png"
                            style="height: 80px; width: 80px;" alt="" />
                        <?php endif; ?>
                    </td>
                    <td><a href="<?=base_url?>Product/look&id=<?=$product->id?>"class="text-decoration-none d-flex justify-content-center"><?=$product->name?></a></td>
                    <td><?=$product->price?>€</td>
                    <td>
                        <a href="<?=base_url?>Cart/plus&index=<?=$index?>" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i></a>    
                        <?=$element['unit']?>
                        <a href="<?=base_url?>Cart/minus&index=<?=$index?>" class="btn btn-info"><i class="fa fa-minus" aria-hidden="true"></i></a>    
                    </td>
                    
                    <td><a href="<?=base_url ?>Cart/delete&index=<?=$index?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-4">
                <div class="container ps-0">
                    <a href="<?=base_url?>Cart/deleteAll" class="btn btn-outline-danger">Delete Order</a>
                </div>
            </div>
            <?php $stats = Utils::statsCart();?>
            <div class="container col-md-6 ps-5 pe-0 d-flex justify-content-end">
                <h3 class="text-light justify-content-end">Total Price <?=$stats['total']?>€</h3>
            </div>
            <div class=" container col-md-2 ps-0 pe-2.5 d-flex justify-content-end">
                <a href="<?=base_url?>Order/make" class="btn btn-outline-success ">Buy</a>
            </div>
        </div>
    <?php else : ?>
        <h1 class="text-light d-flex justify-content-center">Sorry the car is empty!</h3>
    <?php endif; ?>
</div>