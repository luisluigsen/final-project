                    <div class="col-md-8 d-flex">
                                 <div class="row">
                                    <?php while($product=$products->fetch_object()): ?>
                                    <div class="col-4 p-2">
                                        <a href="<?=base_url?>Product/look&id=<?=$product->id?>">
                                            <img class="card-img-top img-fluid" src="<?=base_url?>uploads/<?=$product->image?>">
                                        </a>
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