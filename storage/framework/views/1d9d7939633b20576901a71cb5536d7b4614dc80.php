

<?php $__env->startSection('title', trans('user::auth.login')); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-wrapper">
        <div class="bg-blue">
            <div class="reflection"></div>
        </div>

        <div class="form-inner clearfix">
            <h3 class="text-center">Ecommerce</h3>

            <form method="POST" action="<?php echo e(route('admin.login.post')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="email"><?php echo e(trans('user::auth.email')); ?><span>*</span></label>

                    <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="form-control" id="email" placeholder="<?php echo e(trans('user::attributes.users.email')); ?>" autofocus>

                    <div class="input-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>

                    <?php echo $errors->first('email', '<span class="help-block text-red">:message</span>'); ?>

                </div>

                <div class="form-group">
                    <label for="password"><?php echo e(trans('user::auth.password')); ?><span>*</span></label>

                    <input type="password" class="form-control" name="password" placeholder="<?php echo e(trans('user::attributes.users.password')); ?>">

                    <div class="input-icon">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>

                    <?php echo $errors->first('password', '<span class="help-block text-red">:message</span>'); ?>

                </div>

                <button type="submit" class="btn btn-primary" data-loading>
                    <?php echo e(trans('user::auth.login')); ?>

                </button>

                <div class="clearfix"></div>

                <div class="checkbox pull-left">
                    <input type="hidden" name="remember_me" value="0">
                    <input type="checkbox" name="remember_me" value="1" id="remember-me">

                    <label for="remember-me"><?php echo e(trans('user::attributes.auth.remember_me')); ?></label>
                </div>

                <a href="<?php echo e(route('admin.reset')); ?>" class="text-center pull-right">
                    <?php echo e(trans('user::auth.forgot_password')); ?>

                </a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::admin.auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Modules/User/Resources/views/admin/auth/login.blade.php ENDPATH**/ ?>