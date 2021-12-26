

<?php $__env->startSection('title', trans('storefront::account.pages.my_profile')); ?>

<?php $__env->startSection('account_breadcrumb'); ?>
    <li class="active"><?php echo e(trans('storefront::account.pages.my_profile')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('panel'); ?>
    <div class="panel">
        <div class="panel-header">
            <h4><?php echo e(trans('storefront::account.pages.my_profile')); ?></h4>
        </div>

        <div class="panel-body">
            <div class="my-profile">
                <form method="POST" action="<?php echo e(route('account.profile.update')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="first-name">
                                    <?php echo e(trans('storefront::account.profile.first_name')); ?><span>*</span>
                                </label>

                                <input type="text" name="first_name" value="<?php echo e(old('first_name', $account->first_name)); ?>" id="first-name" class="form-control">

                                <?php $__errorArgs = ['first_name'];
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="last-name">
                                    <?php echo e(trans('storefront::account.profile.last_name')); ?><span>*</span>
                                </label>

                                <input type="text" name="last_name" value="<?php echo e(old('last_name', $account->last_name)); ?>" id="last-name" class="form-control">

                                <?php $__errorArgs = ['last_name'];
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="password">
                                    <?php echo e(trans('storefront::account.profile.password')); ?>

                                </label>

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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="confirm-password">
                                    <?php echo e(trans('storefront::account.profile.confirm_password')); ?>

                                </label>

                                <input type="password" name="password_confirmation" id="confirm-password" class="form-control">

                                <?php $__errorArgs = ['password_confirmation'];
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
                        </div>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary" data-loading>
                        <?php echo e(trans('storefront::account.profile.save_changes')); ?>

                    </button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.account.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/account/profile/edit.blade.php ENDPATH**/ ?>