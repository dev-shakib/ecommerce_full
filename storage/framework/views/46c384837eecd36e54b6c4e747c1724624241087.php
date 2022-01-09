<div class="product-image-gallery">
    <div class="additional-image-wrap">
        <?php if(! $product->base_image->exists): ?>
            <div class="additional-image">
                <img src="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>" alt="Image placeholder" class="image-placeholder">
            </div>
        <?php else: ?>
            <div class="additional-image">
                <img src="<?php echo e($product->base_image->path); ?>" alt="Product image">
            </div>
        <?php endif; ?>

        <?php $__currentLoopData = $product->additional_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! $additionalImage->exists): ?>
                <div class="additional-image">
                    <img src="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>" alt="Image placeholder" class="image-placeholder">
                </div>
            <?php else: ?>
                <div class="additional-image">
                    <img src="<?php echo e($additionalImage->path); ?>" alt="product-additional-image">
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="base-image-wrap">
        <div class="base-image">
            <?php if(! $product->base_image->exists): ?>
                <div class="base-image-inner">
                    <div class="base-image-slide" data-image="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>">
                        <img src="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>" alt="Image placeholder" class="image-placeholder">

                        <div class="btn-gallery-trigger">
                            <i class="las la-search-plus"></i>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="base-image-inner">
                    <div class="base-image-slide" data-image="<?php echo e($product->base_image->path); ?>">
                        <img src="<?php echo e($product->base_image->path); ?>" alt="Product image">

                        <div class="btn-gallery-trigger">
                            <i class="las la-search-plus"></i>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php $__currentLoopData = $product->additional_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additionalImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $additionalImage->exists): ?>
                    <div class="base-image-inner">
                        <div class="base-image-slide" data-image="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>">
                            <img src="<?php echo e(asset('themes/storefront/public/images/image-placeholder.png')); ?>" alt="Image placeholder" class="image-placeholder">

                            <div class="btn-gallery-trigger">
                                <i class="las la-search-plus"></i>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="base-image-inner">
                        <div class="base-image-slide" data-image="<?php echo e($additionalImage->path); ?>">
                            <img src="<?php echo e($additionalImage->path); ?>" alt="Product image">

                            <div class="btn-gallery-trigger">
                                <i class="las la-search-plus"></i>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/images.blade.php ENDPATH**/ ?>