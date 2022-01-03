

<?php $__env->startSection('title', trans('user::auth.login')); ?>

<?php $__env->startSection('content'); ?>
    <section class="form-wrap login-wrap">
        <div class="container">
            <div class="form-wrap-inner login-wrap-inner">
                <h2><?php echo e(trans('user::auth.login')); ?></h2>

                <form method="POST" action="<?php echo e(route('login.post')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="email"><?php echo e(trans('user::auth.email')); ?><span>*</span></label>
                        <input type="text" name="email" value="<?php echo e(old('email')); ?>" id="email" class="form-control">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error-message"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group">
                        <label for="password"><?php echo e(trans('user::auth.password')); ?><span>*</span></label>
                        <input type="password" name="password" id="password" class="form-control">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="error-message"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-check remember-me">
                        <input type="hidden" name="remember_me" value="0">
                        <input type="checkbox" name="remember_me" value="1" id="remember" <?php echo e(old('remember_me', false) ? 'checked' : ''); ?>>
                        <label for="remember" class="form-check-label"><?php echo e(trans('user::auth.remember_me')); ?></label>
                    </div>

                    <a href="<?php echo e(route('reset')); ?>" class="forgot-password">
                        <?php echo e(trans('user::auth.forgot_password')); ?>

                    </a>

                    <button type="submit" class="btn btn-primary btn-sign-in" data-loading>
                        <?php echo e(trans('user::auth.sign_in')); ?>

                    </button>
                </form>

                <?php echo $__env->make('public.auth.partials.social_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <span class="have-an-account">
                    <?php echo e(trans('user::auth.dont_have_an_account')); ?>

                </span>

                <a href="<?php echo e(route('register')); ?>" class="btn btn-default btn-create-account">
                    <?php echo e(trans('user::auth.create_account')); ?>

                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/auth/login.blade.php ENDPATH**/ ?>