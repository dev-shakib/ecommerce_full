

<?php $__env->startSection('title', trans('storefront::storefront.storefront')); ?>

<?php $__env->startSection('content_header'); ?>
    <h3><?php echo e(trans('storefront::storefront.storefront')); ?></h3>

    <ol class="breadcrumb">
        <li><a href="<?php echo e(route('admin.dashboard.index')); ?>"><?php echo e(trans('admin::dashboard.dashboard')); ?></a></li>
        <li class="active"><?php echo e(trans('storefront::storefront.storefront')); ?></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.storefront.settings.update')); ?>" class="form-horizontal" id="storefront-settings-edit-form" novalidate>
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <?php echo $tabs->render(compact('settings')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/edit.blade.php ENDPATH**/ ?>