<div class="col-lg-6 col-sm-9">
    <div class="order-shipping-details">
        <h4><?php echo e(trans('storefront::account.view_order.shipping_address')); ?></h4>

        <address>
            <?php echo e($order->shipping_full_name); ?>

            <br>
            <?php echo e($order->shipping_address_1); ?>

            <br>

            <?php if($order->shipping_address_2): ?>
                <?php echo e($order->shipping_address_2); ?>

                <br>
            <?php endif; ?>

            <?php echo e($order->shipping_city); ?>, <?php echo e($order->shipping_state_name); ?> <?php echo e($order->shipping_zip); ?>

            <br>
            <?php echo e($order->shipping_country_name); ?>

        </address>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show/shipping_address.blade.php ENDPATH**/ ?>