<div class="col-md-8 pt-0 mb-3">
    <?php if(isset($_SESSION['order'])&& $_SESSION['order']=='complete'): ?>
    <div class="alert alert-success mt-2" role="alert">
        your order are confirmed , once you make the payment, your order will be processed.
    </div>
    <?php elseif(isset($_SESSION['order'])&& $_SESSION['order']!='complete') : ?>
    <div class="alert alert-danger mt-2" role="alert">
        your order are not confirmed , try to place your order again.
    </div>
    <?php endif; ?>
</div>