<?php if(isset($pro)): ?>
<div class="col-md-8 pt-0 mb-3">
    <h1><?=$pro->name?></h1>
    <p>Don't have products to look</p>

<?php else: ?>
<h1>The category doesn't exist</h1>
<?php endif;?>