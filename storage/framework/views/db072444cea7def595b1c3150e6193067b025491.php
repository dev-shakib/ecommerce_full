<div class="order-details-bottom">
    <ul class="list-inline order-summary-list">
        <li>
            <label><?php echo e(trans('storefront::account.view_order.subtotal')); ?></label>

            <span class="price-amount">
                <?php echo e($order->sub_total->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

            </span>
        </li>

        <?php if($order->hasShippingMethod()): ?>
            <li>
                <label><?php echo e($order->shipping_method); ?></label>

                <span class="price-amount">
                    <?php echo e($order->shipping_cost->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                </span>
            </li>
        <?php endif; ?>

        <?php $__currentLoopData = $order->taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tax): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <label><?php echo e($tax->name); ?></label>

                <span class="price-amount">
                    <?php echo e($tax->order_tax->amount->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                </span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($order->hasCoupon()): ?>
            <li>
                <label>
                    <?php echo e(trans('storefront::account.view_order.coupon')); ?>

                    <span class="coupon-code">[<?php echo e($order->coupon->code); ?>]</span>
                </label>

                <span class="price-amount">
                    -<?php echo e($order->discount->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                </span>
            </li>
        <?php endif; ?>
    </ul>

    <div class="order-summary-total">
        <label><?php echo e(trans('storefront::account.view_order.total')); ?></label>

        <span class="total-price">
            <?php echo e($order->total->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

        </span>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show/order_totals.blade.php ENDPATH**/ ?>