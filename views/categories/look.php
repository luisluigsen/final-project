<?php if(isset($category)): ?>
<div class="col-md-8 pt-0 mb-3">
    <h1><?=$category->name?></h1>
    <?php if($products->num_rows == 0): ?>
    <p>Don't have products to look</p>
    <?php else: ?>
    <div class="container d-flex">
        <div class="row">
            <h1 class="text-white m-0">Algunos de nuestros productos</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php while($product=$products->fetch_object()): ?>
            <div class="col-4 p-2">
                <div class="card h-100">
                    <img class="card-img-top" src="<?=base_url?>uploads/<?=$product->image?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product->name?></h5>
                        <p class="card-text"><?=$product->description?></p>
                    </div>
                    <div class="card-footer bg-opacity d-flex justify-content-between">
                        <div class="row">
                            <a href="" class="btn btn-outline-success">Go</a>
                        </div>
                        <div class="row">
                            <span>
                                <p class="d-flex justify-content-center"><?=$product->price ?></p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php else: ?>
<h1>The category doesn't exist</h1>
<?php endif;?>