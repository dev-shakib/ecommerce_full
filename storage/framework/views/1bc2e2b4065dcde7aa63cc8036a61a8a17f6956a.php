<div class="order-details-middle">
    <div class="table-responsive">
        <table class="table table-borderless order-details-table">
            <thead>
                <tr>
                    <th><?php echo e(trans('storefront::account.product_name')); ?></th>
                    <th><?php echo e(trans('storefront::account.view_order.unit_price')); ?></th>
                    <th><?php echo e(trans('storefront::account.view_order.quantity')); ?></th>
                    <th><?php echo e(trans('storefront::account.view_order.line_total')); ?></th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="<?php echo e($product->url()); ?>" class="product-name">
                                <?php echo e($product->name); ?>

                            </a>

                            <?php if($product->hasAnyOption()): ?>
                                <ul class="list-inline product-options">
                                    <?php $__currentLoopData = $product->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <?php if($option->isFieldType()): ?>
                                                <label><?php echo e($option->name); ?>:</label> <?php echo e($option->value); ?>

                                            <?php else: ?>
                                                <label><?php echo e($option->name); ?>:</label> <?php echo e($option->values->implode('label', ', ')); ?>

                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </td>

                        <td>
                            <label><?php echo e(trans('storefront::account.view_order.unit_price')); ?></label>

                            <span class="product-price">
                                <?php echo e($product->unit_price->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                            </span>
                        </td>

                        <td>
                            <label><?php echo e(trans('storefront::account.view_order.quantity')); ?></label>

                            <span class="quantity">
                                <?php echo e($product->qty); ?>

                            </span>
                        </td>

                        <td>
                            <label><?php echo e(trans('storefront::account.view_order.line_total')); ?></label>

                            <span class="product-price">
                                <?php echo e($product->line_total->convert($order->currency, $order->currency_rate)->format($order->currency)); ?>

                            </span>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/orders/show/items_ordered.blade.php ENDPATH**/ ?>