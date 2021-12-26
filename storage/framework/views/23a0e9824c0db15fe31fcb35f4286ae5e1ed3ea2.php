<tr>
    <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <th><?php echo e(trans('admin::admin.table.id')); ?></th>
    <th><?php echo e(trans('product::products.table.thumbnail')); ?></th>
    <th><?php echo e(trans('product::products.table.name')); ?></th>
    <th><?php echo e(trans('product::products.table.price')); ?></th>
    <th><?php echo e(trans('admin::admin.table.status')); ?></th>
    <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
</tr>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Product/Resources/views/admin/products/partials/thead.blade.php ENDPATH**/ ?>