<div class="col-lg-6 col-sm-18">
    <div class="order-information">
        <h4><?php echo e(trans('storefront::account.view_order.order_information')); ?></h4>

        <ul class="list-inline order-information-list">
            <?php if($order->customer_phone): ?>
                <li>
                    <label><?php echo e(trans('storefront::account.view_order.phone')); ?></label>
                    <span><?php echo e($order->customer_phone ?: 'N/A'); ?></span>
                </li>
            <?php endif; ?>

            <li>
                <label><?php echo e(trans('storefront::account.view_order.email')); ?></label>
                <span><?php echo e($order->customer_email); ?></span>
            </li>

            <li>
                <label><?php echo e(trans('storefront::account.view_order.date')); ?></label>
                <span><?php echo e($order->created_at->toFormattedDateString()); ?></span>
            </li>

            <li>
                <label><?php echo e(trans('storefront::account.view_order.shipping_method')); ?></label>
                <span><?php echo e($order->shipping_method); ?></span>
            </li>

            <li>
                <label><?php echo e(trans('storefront::account.view_order.payment_method')); ?></label>
                <span><?php echo e($order->payment_method); ?></span>
            </li>

            <?php if($order->note): ?>
                <li>
                    <label><?php echo e(trans('storefront::account.view_order.order_note')); ?></label>
                    <span><?php echo e($order->note); ?></span>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show/order_information.blade.php ENDPATH**/ ?>