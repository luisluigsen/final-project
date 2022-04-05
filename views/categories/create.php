<div class="col-md-8 pt-0 mb-3">
    <div class="container col-12">
        <?php if (isset($edit) && isset($cat) && is_object($cat)) : ?>
            <h3 class="text text-white">Edit Category <?= $cat->name ?></h3>

            <?php $url_action = base_url."Category/edit&id=".$cat->id; ?>

        <?php else : ?>

            <h3 class="text text-white">Enter Category</h3>
            <?php $url_action = base_url."Category/save"; ?>

        <?php endif; ?>
        <div class="d-flex ">
            <form action="<?=$url_action ?>" method="post" class="form-control border-success bg-dark">
                <div class="d-flex justify-content-between">
                    <div class="p-2 bd-highlight">
                        <label for="name" class="form-label text-white m-1">Name</label>
                    </div>
                    <div class="p-2 bd-highlight flex-grow-1">
                        <input type="text" placeholder="Enter category" name="name" class="form-control" value="<?= isset($cat)&& is_object($cat) ? $cat->name:'';?>"/>
                    </div>
                    <div class="p-2 bd-highlight">
                        <input type="submit" value="save" class="btn btn-outline-success ">
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>