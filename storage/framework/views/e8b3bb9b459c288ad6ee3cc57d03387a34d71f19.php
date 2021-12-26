<aside class="right-sidebar">
    <?php if(setting('storefront_features_section_enabled')): ?>
        <div class="feature-list">
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-feature">
                    <div class="feature-icon">
                        <i class="<?php echo e($feature->icon); ?>"></i>
                    </div>

                    <div class="feature-details">
                        <h6><?php echo e($feature->title); ?></h6>
                        <span><?php echo e($feature->subtitle); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</aside>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/right_sidebar.blade.php ENDPATH**/ ?>