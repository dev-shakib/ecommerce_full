<header class="header-wrap">
    <div class="header-wrap-inner">
        <div class="container">
            <div class="row flex-nowrap justify-content-between position-relative align-items-center">
                <div class="header-column-left">
                    <div class="sidebar-menu-icon-wrap">
                        <div class="sidebar-menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a href="<?php echo e(route('home')); ?>" class="header-logo">
                        <?php if(is_null($logo)): ?>
                            <h3><?php echo e(setting('store_name')); ?></h3>
                        <?php else: ?>
                            <img src="<?php echo e($logo); ?>" alt="logo">
                        <?php endif; ?>
                    </a>
                </div>

                <header-search
                    :categories="<?php echo e($categories); ?>"
                    :most-searched-keywords="<?php echo e($mostSearchedKeywords); ?>"
                    initial-query="<?php echo e(request('query')); ?>"
                    initial-category="<?php echo e(request('category')); ?>"
                >
                </header-search>

                <div class="header-column-right d-flex">
                    <a href="<?php echo e(route('compare.index')); ?>" class="header-compare">
                        <div class="icon-wrap">
                            <i class="las la-random"></i>
                        </div>
                        <span><?php echo e(trans('storefront::layout.compare')); ?></span>
                    </a>

                    <a href="<?php echo e(route('account.wishlist.index')); ?>" class="header-wishlist">
                        <div class="icon-wrap">
                            <i class="lar la-heart"></i>
                            <div class="count" v-text="wishlistCount"></div>
                        </div>

                        <span><?php echo e(trans('storefront::layout.favorites')); ?></span>
                    </a>

                    <div class="header-cart">
                        <div class="icon-wrap">
                            <i class="las la-cart-arrow-down"></i>
                            <div class="count" v-text="cart.quantity"></div>
                        </div>

                        <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/header.blade.php ENDPATH**/ ?>