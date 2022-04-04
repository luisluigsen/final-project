        <div class="row">
            <div class="col-md-4  pt-0 mb-3">
                <div class="card bg-success bg-gradient">
                    <div class="card-header">
                        <?php if (!isset($_SESSION['identity'])) : ?>                            
                            <h1>Sign in</h1>
                    </div>
                    <div class="card-body bg-white bg-opacity-50">
                        <form action="<?= base_url ?>User/login" method="POST">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email"></label>
                                    <input type="email" class="form-control" name="email" id="name" aria-describedby="emailHelpId" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label"></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="mb3">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>

                            </div>
                        </form>
                        <a href="<?=base_url?>User/register">Sign up here <i class="fas fa-user" aria-hidden="true"></i></a>
                        <br />
                    <?php else : ?>
                        <div class="card border-dark mb-3">
                            <div class="card-header bg-dark bg-opacity-50 text-black ">
                                <h3>online</h3>
                            </div>
                            <div class="card-body">
                                <h5><?= $_SESSION['identity']->name ?> <?= $_SESSION['identity']->surname ?><i class="fas fa-home"></i></h5>
                            </div>
                    <?php endif; ?>
                        
                    <?php if(isset($_SESSION['identity'])):?>    
                            <div class="card-footer">
                                <a href="<?=base_url?>User/logout">End Session <i class="fas fa-arrow-right " ></i> </a>
                            </div>
                        </div>
                    <?php endif; ?>

                    </div>
                </div>
            </div>