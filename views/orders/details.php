<div class="col-md-8 pt-0 mb-3">
<h3 class="text-light d-flex justify-content-center">Order Details</h3>
<?php if(isset($order)): ?> 
        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">Check</button>
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title">Order Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <?php if(isset($_SESSION['admin'])): ?>
                        <h3 class="text-dark">Change order status</h3>
                        <form action="<?=base_url?>Order/status" method="post">
                            <input type="hidden" value="<?=$order->id ?>" name="order_id"/>
                            <select name="status" id="">
                                <option value="confirm"<?=$order->status == 'confirm' ? 'selected' : '';?>>outstanding</option>
                                <option value="preparation"<?=$order->status == 'preparation' ? 'selected' : '';?>>in preparation</option>
                                <option value="ready"<?=$order->status == 'ready' ? 'selected' : '';?>>ready to send</option>
                                <option value="sended"<?=$order->status == 'sended' ? 'selected' : '';?>>sended</option>
                            </select>
                            <button type="submit" class="btn btn-success">submit</button>
                        </form>
                    <?php endif; ?>   
                        <p class="h5">Province: <small class="text-muted"><?= $order->province ?></small></p></br>
                        <p class="h5">Total to pay: <small class="text-muted"><?= $order->city ?></small></p></br>
                        <p class="h5">Adress: <small class="text-muted"><?= $order->adress ?></small></p></br>
                        <p class="h5">Order nº: <small class="text-muted"><?= $order->id ?></small></p></br>
                        <p class="h5">Total to pay: <small class="text-muted"><?= $order->cost ?>€</small></p></br>
                        <p class="h5">Status: <small class="text-muted"><?=Utils::showStatus($order->status)?></small></p></br>
                        <p class="h5">Products:</p>
                        <table>
                            <?php while($product = $products->fetch_object()) : ?>
                            <ul>
                                <li>
                                    <?= $product->name ?> - <?= $product->price ?>€ - x<?= $product->units ?>
                                </li>
                            </ul>
                            <tr>
                                <td>
                                    <?php if($product->image != null): ?>
                                    <img class="card-img-top img-fluid " src="<?=base_url?>uploads/<?=$product->image?>"
                                        style="height: 80px; width: 80px;" alt="" />
                                    <?php else:?>
                                    <img class="card-img-top img-fluid carrito-image" src="<?=base_url?>img/shirtaz.png"
                                        style="height: 80px; width: 80px;" alt="" />
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?=base_url?>Product/look&id=<?=$product->id?>"class="text-decoration-none"><?=$product->name?></a></td>
                                <td>   <?=$product->price?>€</td>
                                <td> X <?=$product->units ?></td>
                            </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php endif; ?>

</div>