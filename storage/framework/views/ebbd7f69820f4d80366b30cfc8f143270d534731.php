<div class="table-responsive">
    <table class="table table-borderless my-orders-table">
        <thead>
            <tr>
                <th><?php echo e(trans('storefront::account.orders.order_id')); ?></th>
                <th><?php echo e(trans('storefront::account.date')); ?></th>
                <th><?php echo e(trans('storefront::account.orders.status')); ?></th>
                <th><?php echo e(trans('storefront::account.orders.total')); ?></th>
                <th><?php echo e(trans('storefront::account.action')); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($order->id); ?>

                    </td>

                    <td>
                        <?php echo e($order->created_at->toFormattedDateString()); ?>

                    </td>

                    <td>
                        <span class="badge <?php echo e(order_status_badge_class($order->status)); ?>">
                            <?php echo e($order->status()); ?>

                        </span>
                    </td>

                    <td>
                        <?php echo e($order->total->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                    </td>

                    <td>
                        <a href="<?php echo e(route('account.orders.show', $order)); ?>" class="btn btn-view">
                            <i class="las la-eye"></i>
                            <?php echo e(trans('storefront::account.orders.view')); ?>

                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/partials/orders_table.blade.php ENDPATH**/ ?>