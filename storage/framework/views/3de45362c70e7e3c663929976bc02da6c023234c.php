

<?php $__env->startSection('title', trans('storefront::account.pages.my_orders')); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(trans('storefront::account.pages.my_orders')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel'); ?>
    <div class="panel">
        <div class="panel-header">
            <h4><?php echo e(trans('storefront::account.pages.my_orders')); ?></h4>
        </div>

        <div class="panel-body">
            <?php if($orders->isEmpty()): ?>
                <div class="empty-message">
                    <h3><?php echo e(trans('storefront::account.orders.no_orders')); ?></h3>
                </div>
            <?php else: ?>
                <?php echo $__env->make('public.account.partials.orders_table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>

        <div class="panel-footer">
            <?php echo $orders->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/index.blade.php ENDPATH**/ ?>