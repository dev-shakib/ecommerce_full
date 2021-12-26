<div class="steps-wrap" v-if="cartIsNotEmpty">
    <div class="container">
        <ul class="list-inline step-tabs">
            <li class="step-tab <?php echo e(request()->routeIs('cart.index') ? 'active' : ''); ?>">
                <?php if(request()->routeIs('checkout.create')): ?>
                    <a href="<?php echo e(route('cart.index')); ?>" class="step-tab-link">
                        <span class="step-tab-text">
                            <?php echo e(trans('storefront::cart.shopping_cart')); ?>

                            <span class="bg-text">01</span>
                        </span>
                    </a>
                <?php else: ?>
                    <span class="step-tab-text">
                        <?php echo e(trans('storefront::cart.shopping_cart')); ?>

                        <span class="bg-text">01</span>
                    </span>
                <?php endif; ?>
            </li>

            <li class="step-tab <?php echo e(request()->routeIs('checkout.create') ? 'active' : ''); ?>">
                <?php if(request()->routeIs('cart.index') && Cart::hasAvailableShippingMethod()): ?>
                    <a href="<?php echo e(route('checkout.create')); ?>" class="step-tab-link">
                        <span class="step-tab-text">
                            <?php echo e(trans('storefront::cart.checkout')); ?>

                            <span class="bg-text">02</span>
                        </span>
                    </a>
                <?php else: ?>
                    <span class="step-tab-text">
                        <?php echo e(trans('storefront::cart.checkout')); ?>

                        <span class="bg-text">02</span>
                    </span>
                <?php endif; ?>
            </li>

            <li class="step-tab <?php echo e(request()->routeIs('checkout.complete.show') ? 'active' : ''); ?>">
                <span class="step-tab-text">
                    <?php echo e(trans('storefront::cart.order_complete')); ?>

                    <span class="bg-text">03</span>
                </span>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/cart/index/steps.blade.php ENDPATH**/ ?>