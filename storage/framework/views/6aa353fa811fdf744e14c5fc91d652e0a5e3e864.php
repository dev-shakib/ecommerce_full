<aside class="left-sidebar">
    <?php if($upSellProducts->isNotEmpty()): ?>
        <div class="vertical-products">
            <div class="vertical-products-header">
                <h4 class="section-title"><?php echo e(trans('storefront::product.you_might_also_like')); ?></h4>
            </div>

            <div class="vertical-products-slider" ref="upSellProducts">
                <?php $__currentLoopData = $upSellProducts->chunk(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestProductChunks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="vertical-products-slide">
                        <?php $__currentLoopData = $latestProductChunks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <product-card-vertical :product="<?php echo e($latestProduct); ?>"></product-card-vertical>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if($banner->image->exists): ?>
        <a
            href="<?php echo e($banner->call_to_action_url); ?>"
            class="banner d-none d-lg-block"
            target="<?php echo e($banner->open_in_new_window ? '_blank' : '_self'); ?>"
        >
            <img src="<?php echo e($banner->image->path); ?>" alt="Banner">
        </a>
    <?php endif; ?>
</aside>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/left_sidebar.blade.php ENDPATH**/ ?>