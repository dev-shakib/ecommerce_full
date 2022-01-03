

<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('menu::menus.menu')])); ?>

    <li><a href="<?php echo e(route('admin.menus.index')); ?>"><?php echo e(trans('menu::menus.menus')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('menu::menus.menu')])); ?></li>
<?php if (isset($__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537)): ?>
<?php $component = $__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537; ?>
<?php unset($__componentOriginald1838d9cbc3e98f76d88606a9883c1cec482d537); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.menus.store')); ?>" class="form-horizontal" id="menu-create-form" novalidate>
        <?php echo e(csrf_field()); ?>


        <?php echo $__env->make('menu::admin.menus.form.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu::admin.menus.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Modules/Menu/Resources/views/admin/menus/create.blade.php ENDPATH**/ ?>