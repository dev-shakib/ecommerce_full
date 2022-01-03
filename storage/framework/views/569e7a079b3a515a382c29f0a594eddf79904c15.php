<div class="row">
    <?php if ($currentUser->hasAccess('admin.menu_items.index')) : ?>
        <div class="col-md-6">
            <?php if($menu->exists): ?>
                <?php if ($currentUser->hasAccess('admin.menu_items.create')) : ?>
                    <div class="btn-group pull-right m-b-15">
                        <a href="<?php echo e(route('admin.menus.items.create', $menu)); ?>" class="btn btn-primary">
                            <?php echo e(trans('admin::resource.create', ['resource' => trans('menu::menu_items.menu_item')])); ?>

                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($currentUser->hasAccess('admin.menu_items.edit')) : ?>
                    <div class="box box-primary overflow-hidden">
                        <div class="box-body">
                            <div class="dd">
                                <?php echo $__env->make('menu::admin.menus.form.menu_items_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="alert alert-info">
                    <?php echo e(trans('menu::menus.form.please_save_the_menu_first')); ?>

                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-body">
                <?php echo e(Form::text('name', trans('menu::attributes.name'), $errors, $menu, ['required' => true])); ?>

                <?php echo e(Form::checkbox('is_active', trans('menu::attributes.is_active'), trans('menu::menus.form.enable_the_menu'), $errors, $menu)); ?>


                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-primary" data-loading>
                            <?php echo e(trans('admin::admin.buttons.save')); ?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Menu/Resources/views/admin/menus/form/fields.blade.php ENDPATH**/ ?>