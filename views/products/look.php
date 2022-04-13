<?php if(isset($product)): ?>
<div class="col-md-8 pt-0 ">
    <h1 class="text-light d-flex justify-content-center"><?=$product->name?></h1>
    <div class="row d-flex justify-content-center">
        <div class="col-6 p-2">
            <div class="card h-100 border-success">
                <?php if($product->image != null): ?>
                <img class="card-img-top img-fluid" src="<?=base_url?>uploads/<?=$product->image?>" alt="" />
                <?php else:?>
                <img class="card-img-top img-fluid" src="<?=base_url?>img/shirtaz.png" alt="" />
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?=$product->name?></h5>
                    <p><?=$product->description?></p>
                </div>
                <div class="card-footer bg-opacity d-flex ">
                    <div class="row justify-content-between">
                        <a href="<?=base_url?>Cart/add&id=<?=$product->id?>" class="btn btn-outline-success"><i class="fa fa-cart-arrow-down"></i></a>
                        <span>
                            <p class="d-flex justify-content-center"><?=$product->price ?>€</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<h1>The product doesn't exist</h1>
<?php endif;?>