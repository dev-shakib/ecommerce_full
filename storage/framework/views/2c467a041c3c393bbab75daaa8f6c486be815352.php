

<?php $__env->startSection('title', trans('storefront::account.view_order.view_order')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(route('account.dashboard.index')); ?>"><?php echo e(trans('storefront::account.pages.my_account')); ?></a></li>
    <li><a href="<?php echo e(route('account.orders.index')); ?>"><?php echo e(trans('storefront::account.pages.my_orders')); ?></a></li>
    <li class="active"><?php echo e(trans('storefront::account.orders.view_order')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="order-details-wrap">
        <div class="container">
            <div class="order-details-top">
                <h3 class="section-title"><?php echo e(trans('storefront::account.view_order.view_order')); ?></h3>

                <div class="row">
                    <?php echo $__env->make('public.account.orders.show.order_information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('public.account.orders.show.billing_address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('public.account.orders.show.shipping_address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <?php echo $__env->make('public.account.orders.show.items_ordered', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('public.account.orders.show.order_totals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show.blade.php ENDPATH**/ ?>