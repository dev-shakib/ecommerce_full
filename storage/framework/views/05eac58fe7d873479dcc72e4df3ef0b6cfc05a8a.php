<footer class="footer-wrap">
    <div class="container">

        <div class="footer">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-5 col-md-8">
                        <div class="contact-us">
                            <h4 class="title"><?php echo e(trans('storefront::layout.contact_us')); ?></h4>

                            <ul class="list-inline contact-info">
                                <?php if(setting('store_phone')): ?>
                                    <li>
                                        <i class="las la-phone"></i>
                                        <span><?php echo e(setting('store_phone')); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if(setting('store_email')): ?>
                                    <li>
                                        <i class="las la-envelope"></i>
                                        <span><?php echo e(setting('store_email')); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if(setting('storefront_address')): ?>
                                    <li>
                                        <i class="las la-map"></i>
                                        <span><?php echo e(setting('storefront_address')); ?></span>
                                    </li>
                                <?php endif; ?>
                            </ul>

                            <?php if(social_links()->isNotEmpty()): ?>
                                <ul class="list-inline social-links">
                                    <?php $__currentLoopData = social_links(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon => $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($socialLink); ?>">
                                                <i class="<?php echo e($icon); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5">
                        <div class="footer-links">
                            <h4 class="title"><?php echo e(trans('storefront::layout.my_account')); ?></h4>

                            <ul class="list-inline">
                                <li>
                                    <a href="<?php echo e(route('account.dashboard.index')); ?>">
                                        <?php echo e(trans('storefront::account.pages.dashboard')); ?>

                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('account.orders.index')); ?>">
                                        <?php echo e(trans('storefront::account.pages.my_orders')); ?>

                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('account.reviews.index')); ?>">
                                        <?php echo e(trans('storefront::account.pages.my_reviews')); ?>

                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo e(route('account.profile.edit')); ?>">
                                        <?php echo e(trans('storefront::account.pages.my_profile')); ?>

                                    </a>
                                </li>

                                <?php if(auth()->guard()->check()): ?>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>">
                                            <?php echo e(trans('storefront::account.pages.logout')); ?>

                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <?php if($footerMenuOne->isNotEmpty()): ?>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title"><?php echo e(setting('storefront_footer_menu_one_title')); ?></h4>

                                <ul class="list-inline">
                                    <?php $__currentLoopData = $footerMenuOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($menuItem->url()); ?>" target="<?php echo e($menuItem->target); ?>">
                                                <?php echo e($menuItem->name); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($footerMenuTwo->isNotEmpty()): ?>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-links">
                                <h4 class="title"><?php echo e(setting('storefront_footer_menu_two_title')); ?></h4>

                                <ul class="list-inline">
                                    <?php $__currentLoopData = $footerMenuTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($menuItem->url()); ?>" target="<?php echo e($menuItem->target); ?>">
                                                <?php echo e($menuItem->name); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($footerTags->isNotEmpty()): ?>
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-links footer-tags">
                                <h4 class="title"><?php echo e(trans('storefront::layout.tags')); ?></h4>

                                <ul class="list-inline">
                                    <?php $__currentLoopData = $footerTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e($footerTag->url()); ?>">
                                                <?php echo e($footerTag->name); ?>

                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-9 col-sm-18">
                        <div class="footer-text">
                            <?php echo $copyrightText; ?>

                        </div>
                    </div>

                    <?php if($acceptedPaymentMethodsImage->exists): ?>
                        <div class="col-md-9 col-sm-18">
                            <div class="footer-payment">
                                <img src="<?php echo e($acceptedPaymentMethodsImage->path); ?>" alt="accepted payment methods">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/footer.blade.php ENDPATH**/ ?>