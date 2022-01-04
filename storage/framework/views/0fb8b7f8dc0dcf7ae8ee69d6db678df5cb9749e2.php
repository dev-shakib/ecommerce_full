<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" data-dismiss="alert" class="close">
            <i class="las la-times"></i>
        </button>

        <i class="las la-check-circle"></i>

        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" data-dismiss="alert" class="close">
            <i class="las la-times"></i>
        </button>

        <i class="las la-check-circle"></i>

        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/alert.blade.php ENDPATH**/ ?>