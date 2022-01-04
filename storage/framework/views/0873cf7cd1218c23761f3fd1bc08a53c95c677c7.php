

<?php $__env->startSection('title', trans('storefront::404.404')); ?>

<?php $__env->startSection('content'); ?>
    <section class="error-page-wrap">
        <div class="container">
            <div class="row error-page">
                <div class="col-xl-7 col-lg-8 col-md-18 error-page-left">
                    <h1 class="section-title"><?php echo e(trans('storefront::404.page_not_found')); ?></h1>

                    <p><?php echo e(trans('storefront::404.unable_to_find_the_page')); ?></p>

                    <a href="<?php echo e(route('home')); ?>" class="btn btn-default btn-back-to-home">
                        <?php echo e(trans('storefront::404.back_to_home')); ?>

                    </a>
                </div>

                <div class="col-xl-6 col-lg-7 col-md-18 error-page-right">
                    <img src="<?php echo e(Theme::url('public/images/404.svg')); ?>" class="error-image" alt="error image">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/errors/404.blade.php ENDPATH**/ ?>