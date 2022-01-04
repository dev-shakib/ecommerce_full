<section class="top-nav-wrap">
    <div class="container">
        <div class="top-nav">
            <div class="row justify-content-between">
                <div class="top-nav-left d-none d-lg-block">
                    <span><i class="las la-phone"></i></span>
                    <span class="phone"><?php echo e(setting('storefront_welcome_text')); ?></span>
                </div>

                <div class="top-nav-right">
                    <ul class="list-inline top-nav-right-list">
                        <?php if(is_multi_currency()): ?>
                            <li>
                                
                                <select class="custom-select-option arrow-black" onchange="location = this.value">
                                    <?php $__currentLoopData = setting('supported_currencies'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e(route('current_currency.store', ['code' => $currency])); ?>"
                                            <?php echo e(currency() === $currency ? 'selected' : ''); ?>

                                        >
                                            <?php echo e($currency); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </li>
                        <?php endif; ?>

                        

                        

                        <?php if(is_multilingual()): ?>
                            <li>
                                <i class="las la-language"></i>
                                <select class="custom-select-option arrow-black" onchange="location = this.value">
                                    <?php $__currentLoopData = supported_locales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e(localized_url($locale)); ?>" <?php echo e(locale() === $locale ? 'selected' : ''); ?>>
                                            <?php echo e($language['name']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </li>
                        <?php endif; ?>

                        <?php if(auth()->guard()->check()): ?>
                            <li>
                                <a href="<?php echo e(route('account.dashboard.index')); ?>">
                                    
                                    <?php echo e(trans('storefront::layout.account')); ?>

                                </a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo e(route('login')); ?>">
                                    
                                    <?php echo e(trans('storefront::layout.login')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/top_nav.blade.php ENDPATH**/ ?>