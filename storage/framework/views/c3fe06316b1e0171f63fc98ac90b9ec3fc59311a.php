

<?php $__env->startSection('breadcrumb'); ?>
    <?php if(request()->routeIs('account.dashboard.index')): ?>
        <li class="active"><?php echo e(trans('storefront::account.pages.my_account')); ?></li>
    <?php else: ?>
        <li><a href="<?php echo e(route('account.dashboard.index')); ?>"><?php echo e(trans('storefront::account.pages.my_account')); ?></a></li>
    <?php endif; ?>

    <?php echo $__env->yieldContent('account_breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="account-wrap">
        <div class="container">
            <div class="account-wrap-inner">
                <div class="account-left">
                    <ul class="list-inline account-sidebar">
                        <li class="<?php echo e(request()->routeIs('account.dashboard.index') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.dashboard.index')); ?>">
                                <i class="las la-tachometer-alt"></i>
                                <?php echo e(trans('storefront::account.pages.dashboard')); ?>

                            </a>
                        </li>

                        <li class="<?php echo e(request()->routeIs('account.orders.index') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.orders.index')); ?>">
                                <i class="las la-cart-arrow-down"></i>
                                <?php echo e(trans('storefront::account.pages.my_orders')); ?>

                            </a>
                        </li>

                        <li class="<?php echo e(request()->routeIs('account.wishlist.index') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.wishlist.index')); ?>">
                                <i class="lar la-heart"></i>
                                <?php echo e(trans('storefront::account.pages.my_wishlist')); ?>

                            </a>
                        </li>

                        <li class="<?php echo e(request()->routeIs('account.reviews.index') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.reviews.index')); ?>">
                                <i class="las la-comment"></i>
                                <?php echo e(trans('storefront::account.pages.my_reviews')); ?>

                            </a>
                        </li>

                        <li class="<?php echo e(request()->routeIs('account.profile.edit') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('account.profile.edit')); ?>">
                                <i class="las la-user-circle"></i>
                                <?php echo e(trans('storefront::account.pages.my_profile')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('logout')); ?>">
                                <i class="las la-sign-out-alt"></i>
                                <?php echo e(trans('storefront::account.pages.logout')); ?>

                            </a>
                        </li>
                    </ul>
                </div>

                <div class="account-right">
                    <div class="panel-wrap">
                        <?php echo $__env->yieldContent('panel'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/layout.blade.php ENDPATH**/ ?>