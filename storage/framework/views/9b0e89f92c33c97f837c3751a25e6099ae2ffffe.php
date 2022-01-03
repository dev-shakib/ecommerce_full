<?php if(count($providers) !== 0): ?>
    <span class="sign-in-with">
        <?php if(request()->routeIs('login')): ?>
            <?php echo e(trans('user::auth.or_continue_with')); ?>

        <?php else: ?>
            <?php echo e(trans('user::auth.or_sign_up_with')); ?>

        <?php endif; ?>
    </span>

    <ul class="list-inline social-login">
        <?php if(setting('facebook_login_enabled')): ?>
            <li>
                <a href="<?php echo e(route('login.redirect', ['provider' => 'facebook'])); ?>" class="facebook" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('user::auth.facebook')); ?>">
                    <i class="lab la-facebook-f"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if(setting('google_login_enabled')): ?>
            <li>
                <a href="<?php echo e(route('login.redirect', ['provider' => 'google'])); ?>" class="google" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('user::auth.google')); ?>">
                    <i class="lab la-google"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/auth/partials/social_login.blade.php ENDPATH**/ ?>