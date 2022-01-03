<div class="col-lg-6 col-sm-9">
    <div class="order-billing-details">
        <h4><?php echo e(trans('storefront::account.view_order.billing_address')); ?></h4>

        <address>
            <?php echo e($order->billing_full_name); ?>

            <br>
            <?php echo e($order->billing_address_1); ?>

            <br>

            <?php if($order->billing_address_2): ?>
                <?php echo e($order->billing_address_2); ?>

                <br>
            <?php endif; ?>

            <?php echo e($order->billing_city); ?>, <?php echo e($order->billing_state_name); ?> <?php echo e($order->billing_zip); ?>

            <br>
            <?php echo e($order->billing_country_name); ?>

        </address>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show/billing_address.blade.php ENDPATH**/ ?>