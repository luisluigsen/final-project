<div class="col-md-8 pt-0 mb-3">
    <?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>
    <div class="container">
        <h1 class="m-0 text-light">Edit Products <?= $pro->name ?></h1>
    </div>
    <?php $url_action = base_url . "Product/save&id=" . $pro->id; ?>
    <?php else : ?>
    <div class="container">
        <h1 class="m-0 text-light">Create New Products</h1>
    </div>
    <?php $url_action = base_url . "Product/save"; ?>
    <?php endif; ?>
    <div class="container">
        <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="name" class="col-sm-1-12 col-form-label text-light">Name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control " name="name" id="nameProduct" placeholder="Product Name"
                        value="<?= isset($pro) && is_object($pro) ? $pro->name : ''; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-1-12 col-form-label text-light">Description</label>
                <div class="col-sm-1-12">
                    <textarea class="form-control" name="description" id="descriptionProduct"
                        placeholder="Description Name"><?= isset($pro) && is_object($pro) ? $pro->description : ''; ?></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-1-12 col-form-label text-light">Price</label>
                <div class="col-sm-1-12">
                    <input type="number" class="form-control" name="price" id="priceProduct" placeholder="Price Product"
                        value="<?= isset($pro) && is_object($pro) ? $pro->price : ''; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stock" class="col-sm-1-12 col-form-label text-light">Stock</label>
                <div class="col-sm-1-12">
                    <input type="number" class="form-control" name="stock" id="stockProduct" placeholder="Stock Product"
                        value="<?= isset($pro) && is_object($pro) ? $pro->stock : ''; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="category" class="col-sm-1-12 col-form-label text-light">Category</label>
                <?php $categories = Utils::showCategories(); ?>
                <div class="col-sm-1-12">
                    <select class="form-control" name="category">
                        <?php while ($cat = $categories->fetch_object()) : ?>
                        <option value="<?= $cat->id ?>"
                            <?= isset($pro) && is_object($pro) && $cat->id == $pro->category_id ? "selected" : ''; ?>>
                            <?= $cat->name ?>
                        </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row col-12">
                <label for="image" class="col-sm-1-12 col-form-label text-light"></label>
                <?php if(isset($pro)&& is_object($pro)&& !empty($pro->image)): ?>
                <div class="mb-3 row">
                    <div class="col-sm-1-12">
                        <div class="card" style="width: 14rem;">
                            <img src="<?=base_url?>uploads/<?=$pro->image?>" class="card-img-top"  />
                            <div class="card-body">
                                <h5 class="card-title"><?=$pro->name?></h5>
                                <p class="card-text"><?=$pro->description?></p>
                                <a href="" class="btn btn-outline-success">Go</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-sm-1-12">
                    <input type="file" class="form-control" name="image" id="imageProduct" placeholder="Image Product">
                </div>
            </div>
            <?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>
            <div class="mb-3 row">
                <div class="col-sm-1-12">
                    <button type="submit" class="btn btn-outline-success">Edit product</button>
                </div>
            </div>
            <?php else : ?>
            <div class="mb-3 row">
                <div class="col-sm-1-12">
                    <button type="submit" class="btn btn-outline-success">Create Product</button>
                </div>
            </div>
            <?php endif; ?>
        </form>
    </div>
</div>