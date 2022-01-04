<section class="navigation-wrap">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <?php echo $__env->make('public.layout.navigation.primary_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="navigation-text">
                <i class="las la-lightbulb"></i>
                <?php echo e(setting('storefront_navbar_text')); ?>

            </span>
        </div>

        <div class="navigation-inner">
            <?php echo $__env->make('public.layout.navigation.category_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/navigation.blade.php ENDPATH**/ ?>