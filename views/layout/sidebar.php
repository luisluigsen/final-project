
        
            <div class="row">
                <div class="col-md-4 pt-2">
                    <div class="card border border-success bg-dark">
                        <div class="card-header text-light">
                            <?php if (!isset($_SESSION['identity'])) : ?>
                                <h1>Sign in</h1>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url ?>User/login" method="POST">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="name" aria-describedby="emailHelpId" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-outline-success">Submit</button>
                                    </div>
                                </form>
                                <div class="mt-3">
                                    <a href="<?= base_url ?>User/register" class="text-light">Sign up here <i class="fas fa-user" aria-hidden="true"></i></a>
                                </div>
                            <?php else : ?>
                            <div class="card border-success bg-dark">
                                <div class="card-header">
                                <h3><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->surname ?> <i class="fas fa-home"></i></h3>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-outline-light border-0 " href="#"><i class="fas fa-shopping-cart"></i> Manage Orders</a>
                                    <a class="btn btn-outline-light border-0" href="<?= base_url ?>Product/manage"><i class="fas fa-tags"></i> Manage Products</a>
                                    <a class="btn btn-outline-light border-0" href="<?= base_url ?>Category/index"><i class="fas fa-star"></i> Manage Categories </a>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['identity'])) : ?>

                                <div class="card-footer">
                                    <a class="btn btn-outline-light border-0" href="<?= base_url ?>User/logout">End Session <i class="fas fa-arrow-right "></i></a>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>