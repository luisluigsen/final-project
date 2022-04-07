<div class="col-md-8 pt-0 mb-3">
    <div class="container">
        <h1 class="m-0 text-light">Create New Products</h1>
    </div>
    <div class="container">
        <form action="<?= base_url ?>Product/save" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="name" class="col-sm-1-12 col-form-label text-light">Name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control " name="name" id="nameProduct" placeholder="Product Name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-1-12 col-form-label text-light">Description</label>
                <div class="col-sm-1-12">
                    <textarea class="form-control" name="description" id="descriptionProduct" placeholder="Description Name"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-1-12 col-form-label text-light">Price</label>
                <div class="col-sm-1-12">
                    <input type="number" class="form-control" name="price" id="priceProduct" placeholder="Price Product">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="stock" class="col-sm-1-12 col-form-label text-light">Stock</label>
                <div class="col-sm-1-12">
                    <input type="number" class="form-control" name="stock" id="stockProduct" placeholder="Stock Product">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="category" class="col-sm-1-12 col-form-label text-light">Category</label>
                <?php $categories = Utils::showCategories(); ?>
                <div class="col-sm-1-12">
                    <select class="form-control" name="category">
                        <?php while ($cat = $categories->fetch_object()) : ?>
                            <option value="<?= $cat->id ?>">
                                <?= $cat->name ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-1-12 col-form-label text-light"></label>
                <div class="col-sm-1-12">
                    <input type="file" class="form-control" name="image" id="imageProduct" placeholder="Image Product">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-1-12">
                    <button type="submit" class="btn btn-outline-success">Create Product</button>
                </div>
            </div>
        </form>
    </div>
</div>