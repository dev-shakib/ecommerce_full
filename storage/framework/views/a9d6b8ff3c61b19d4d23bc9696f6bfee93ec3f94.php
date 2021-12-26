<div class="panel">
    <div class="panel-header">
        <h5><?php echo e($label); ?></h5>
    </div>

    <div class="panel-body">
        <?php if ($currentUser->hasAccess('admin.media.index')) : ?>
            <div class="panel-image">
                <?php if(is_null($banner->image->path)): ?>
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <img class="hide">
                <?php else: ?>
                    <img src="<?php echo e($banner->image->path); ?>" alt="Banner">
                <?php endif; ?>

                <input type="hidden" name="translatable[<?php echo e($name); ?>_file_id]" value="<?php echo e($banner->image->id); ?>" class="banner-file-id">
            </div>
        <?php endif; ?>

        <div class="panel-content clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>-call-to-action-url"><?php echo e(trans("storefront::attributes.call_to_action_url")); ?></label>
                        <input type="text" name="<?php echo e($name); ?>_call_to_action_url" value="<?php echo e($banner->call_to_action_url); ?>" class="form-control" id="<?php echo e($name); ?>-call-to-action-url">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="checkbox">
                        <input type="hidden" name="<?php echo e($name); ?>_open_in_new_window" value="0">
                        <input type="checkbox" name="<?php echo e($name); ?>_open_in_new_window" value="1" id="<?php echo e($name); ?>-open-in-new-window" <?php echo e($banner->open_in_new_window ? 'checked' : ''); ?>>
                        <label for="<?php echo e($name); ?>-open-in-new-window">
                            <?php echo e(trans("storefront::attributes.open_in_new_window")); ?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/partials/single_banner.blade.php ENDPATH**/ ?>