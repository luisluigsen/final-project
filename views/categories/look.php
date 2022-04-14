<?php if(isset($category)): ?>
<div class="col-md-8 pt-0 mb-3">
    <h1 class="text-light d-flex justify-content-center"><?=$category->name?></h1>
    <?php if($products->num_rows == 0): ?>
    <p>Don't have products to look</p>
    <?php else: ?>
    <div class="row">
        <?php while($product=$products->fetch_object()): ?>
        <div class="col-sm-4 p-2">
            <div class="card h-100 border-success">
                <a href="<?=base_url?>Product/look&id=<?=$product->id?>" class="text-decoration-none text-dark">
                    <img class="card-img-top img-fluid" src="<?=base_url?>uploads/<?=$product->image?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product->name?></h5>
                    </div>
                    <div class="card-footer bg-opacity d-flex ">
                        <div class="row justify-content-between">
                            <a href="<?=base_url?>Cart/add&id=<?=$product->id?>" class="btn btn-outline-success"><i class="fa fa-cart-arrow-down"></i></a>
                            <span>
                                <p class="d-flex justify-content-center"><?=$product->price ?>€</p>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

</div>
<?php endif; ?>
<?php else: ?>
<h1>The category doesn't exist</h1>
<?php endif;?>