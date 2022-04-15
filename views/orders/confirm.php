<div class="col-md-8 pt-0 mb-3">
    <?php if(isset($_SESSION['order'])&& $_SESSION['order']=='complete'): ?>
    <div class="alert alert-success mt-2" role="alert">
        your order are confirmed , once you make the payment, your order will be processed.
    </div>
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
                    <p class="h5">Order nº: <small class="text-muted"><?= $order->id ?></small></p></br>
                    <p class="h5">Total to pay: <small class="text-muted"><?= $order->cost ?>€</small></p></br>
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

    <?php elseif(isset($_SESSION['order'])&& $_SESSION['order']!='complete') : ?>
    <div class="alert alert-danger mt-2" role="alert">
        your order are not confirmed , try to place your order again.
    </div>
    <?php endif; ?>
</div>