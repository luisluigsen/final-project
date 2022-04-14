<div class="col-md-8 pt-0 mb-3">
   <?php if(isset($_SESSION['identity'])): ?>
       <h3 class="text-light d-flex justify-content-center">Make your Order</h3>
       <a href="<?=base_url?>Cart/index" class="text-decoration-none" >See the products and prices of the order</a> <i class="fa fa-arrow-circle-left text-light" aria-hidden="true"></i>
       <form action="<?=base_url.'Order/add'?>" method="post" class="mt-2">
            <div class="mb-3">
                <label for="Province" class="form-label text-light">Province</label>
                <input class="form-control" name="province" id="province" type="text" placeholder="Enter your Province" required>
            <div class="mb-3">
                <label for="city" class="form-label text-light">City</label>
                <input class="form-control" name="city" id="city" type="text" placeholder="Enter your City" required>
            <div class="mb-3">
                <label for="adress" class="form-label text-light">Adress</label>
                <input class="form-control" name="adress" id="adress" type="text" placeholder="Enter your Adress" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-success" value="confirm">Confirm</button>
            </div>
       </form>
       <?php else :?>
       <div class="alert alert-danger mt-2" role="alert">
           you need to be identified
       </div>
       <?php endif;?>
   </div>
</div>