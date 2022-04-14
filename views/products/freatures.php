                    <div class="col-md-8 d-flex">
                        <div class="row">
                            <?php while($product=$products->fetch_object()): ?>
                            <div class="col-sm-4 p-2">
                                <div class="card h-100 border-success">
                                    <a href="<?=base_url?>Product/look&id=<?=$product->id?>" class="text-decoration-none text-dark" >
                                        <img class="card-img-top img-fluid"
                                            src="<?=base_url?>uploads/<?=$product->image?>" alt="">
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


                    <!-- contenido -->

                    <div class="row row-cols-1 row-cols-md-3 g-4 p-0 m-0">
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?=base_url?>img/camiseta-azul.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?=base_url?>img/camiseta-amarilla.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?=base_url?>img/camiseta-marina.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This card has even longer content
                                        than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>