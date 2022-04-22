<div class="row">
    <div class="col-md-4 pt-2">
        <?php if (!isset($_SESSION['identity'])) : ?>
            <div class="card border border-success bg-dark">
                <div class="card-header text-light">
                    <h1>Sign in</h1>
                </div>
                <div class="card-body">
                    <form action="<?= base_url ?>User/login" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="name" aria-describedby="emailHelpId"
                                placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a href="<?= base_url ?>User/register" class="text-light">Sign up here <i class="fas fa-user"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>        
        <?php else : ?>
            <div class="card border border-success bg-dark">
                <div class="card-header text-light">
                    <h3><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->surname ?> <i class="fas fa-home"></i></h3>
                </div>
            </div>    
        <?php endif; ?>
        <?php if(isset($_SESSION['identity'])): ?>
            <div class="card border border-success bg-dark">
                <div class="card-header text-light">
                    <h3 class="text-light">My Car</h3>
                </div>
                <?php $stats=Utils::statsCart();?>
                <div class="card-body text-light">
                    <div class="containercar1">
                        <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-cart-plus" aria-hidden="true"></i> Car</h5></a>
                    </div>
                    <div class="containercar2">
                        <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-shopping-bag" aria-hidden="true"></i> Total: <?=$stats['total']?>€</h5></a>
                    </div>
                    <div class="containercar3">
                        <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-star" aria-hidden="true"></i> Products(<?=$stats['count']?>)</h5></a>
                    </div>
                </div>        
            </div>
            <div class="card border border-success bg-dark">
                <div class="card-body">
                    <div class="containerad1">
                        <a class="btn btn-outline-light border-0" href="<?= base_url ?>Order/manage"><i class="fas fa-shopping-cart"></i> Manage Orders</a>
                    </div>
                    <div class="containerad2"> 
                        <a class="btn btn-outline-light border-0" href="<?= base_url ?>Category/index"><i class="fas fa-star"></i> Manage Categories </a>
                    </div>
                    <div class="containerad3">
                        <a class="btn btn-outline-light border-0" href="<?= base_url ?>Product/manage"><i class="fas fa-tags"></i> Manage Products</a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="containerad4">
                        <a class="btn btn-outline-light border-0" href="<?= base_url ?>User/logout">End Session <i class="fas fa-arrow-right "></i></a> 
                    </div>
                </div>      
            </div>    
        <?php endif; ?>
        <?php if (isset($_SESSION['identity'])) : ?>
            <div class="card border border-success bg-dark">
                <div class="card-header text-light">
                    <h3 class="text-light">My Car</h3>
                </div>
                <?php $stats=Utils::statsCart();?>
                <div class="card-body text-light">
                    <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-cart-plus" aria-hidden="true"></i> Car</h5></a>
                    <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-shopping-bag" aria-hidden="true"></i> Total: <?=$stats['total']?>€</h5></a>
                    <a href="<?=base_url?>Cart/index" class="text-decoration-none text-light"><h5><i class="fa fa-star" aria-hidden="true"></i> Products(<?=$stats['count']?>)</h5></a>
                </div>        
            </div>
            <div class="card border border-success bg-dark">
                <div class="card-body">
                    <div class="containeruser1">
                        <a class="btn btn-outline-light border-0 " href="<?=base_url?>Order/my_orders"><i class="fas fa-shopping-cart"></i>My Orders</a>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="containeruser4">
                        <a class="btn btn-outline-light border-0" href="<?= base_url ?>User/logout">End Session <i class="fas fa-arrow-right "></i></a> 
                    </div>
                </div>  
            </div>    
        <?php endif; ?>                        
    </div>        
