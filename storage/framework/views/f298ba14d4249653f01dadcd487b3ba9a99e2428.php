<sidebar-cart inline-template>
    <aside class="sidebar-cart-wrap">
        <div class="sidebar-cart-top">
            <h3 class="title"><?php echo e(trans('storefront::layout.shopping_cart')); ?></h3>

            <div class="sidebar-cart-close">
                <i class="las la-times"></i>
            </div>
        </div>

        <div class="sidebar-cart-middle" :class="{ 'custom-scrollbar': cartIsNotEmpty, empty: cartIsEmpty }">
            <div class="sidebar-cart-items-wrap">
                <sidebar-cart-item
                    v-for="cartItem in cart.items"
                    :key="cartItem.id"
                    :cart-item="cartItem"
                >
                </sidebar-cart-item>
            </div>

            <div class="empty-message" v-if="cartIsEmpty">
                <?php echo $__env->make('public.layout.sidebar_cart.empty_logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <h4><?php echo e(trans('storefront::cart.your_cart_is_empty')); ?></h4>
            </div>
        </div>

        <div class="sidebar-cart-bottom" v-if="cartIsNotEmpty">
            <h5 class="sidebar-cart-subtotal">
                <?php echo e(trans('storefront::layout.subtotal')); ?>

                <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
            </h5>

            <div class="sidebar-cart-actions">
                <a href="<?php echo e(route('cart.index')); ?>" class="btn btn-default btn-view-cart">
                    <?php echo e(trans('storefront::layout.view_cart')); ?>

                </a>

                <a href="<?php echo e(route('checkout.create')); ?>" class="btn btn-primary btn-checkout">
                    <?php echo e(trans('storefront::layout.checkout')); ?>

                </a>
            </div>
        </div>
    </aside>
</sidebar-cart>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/sidebar_cart.blade.php ENDPATH**/ ?>