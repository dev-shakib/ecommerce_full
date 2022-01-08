

<?php $__env->startSection('title', trans('storefront::account.pages.dashboard')); ?>

<?php $__env->startSection('panel'); ?>
    <?php if($recentOrders->isNotEmpty()): ?>
        <div class="panel">
            <div class="panel-header">
                <h4><?php echo e(trans('storefront::account.dashboard.recent_orders')); ?></h4>

                <a href="<?php echo e(route('account.orders.index')); ?>">
                    <?php echo e(trans('storefront::account.dashboard.view_all')); ?>

                </a>
            </div>

            <div class="panel-body">
                <?php echo $__env->make('public.account.partials.orders_table', ['orders' => $recentOrders], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="panel">
        <div class="panel-header">
            <h4><?php echo e(trans('storefront::account.dashboard.account_information')); ?></h4>

            <a href="<?php echo e(route('account.profile.edit')); ?>">
                <?php echo e(trans('storefront::account.dashboard.edit')); ?>

            </a>
        </div>

        <div class="panel-body">
            <ul class="list-inline user-info">
                <li>
                    <i class="las la-user-circle"></i>
                    <span><?php echo e($account->full_name); ?></span>
                </li>

                <li>
                    <i class="las la-envelope"></i>
                    <span><?php echo e($account->email); ?></span>
                </li>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/dashboard/index.blade.php ENDPATH**/ ?>