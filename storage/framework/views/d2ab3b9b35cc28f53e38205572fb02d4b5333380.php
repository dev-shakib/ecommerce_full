<?php if($latestProducts->isNotEmpty()): ?>
    <div class="vertical-products">
        <div class="vertical-products-header">
            <h4 class="section-title"><?php echo e(trans('storefront::products.latest_products')); ?></h4>
        </div>

        <div class="vertical-products-slider">
            <div class="vertical-products-slide">
                <?php $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <product-card-vertical :product="<?php echo e(json_encode($latestProduct)); ?>"></product-card-vertical>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/index/latest_products.blade.php ENDPATH**/ ?>