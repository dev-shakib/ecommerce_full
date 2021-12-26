<?php $__env->startComponent('admin::components.table', ['id' => 'product-reviews-table']); ?>
    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <th><?php echo e(trans('review::reviews.table.reviewer_name')); ?></th>
            <th><?php echo e(trans('review::reviews.table.rating')); ?></th>
            <th><?php echo e(trans('review::reviews.table.approved')); ?></th>
            <th data-sort><?php echo e(trans('admin::admin.table.date')); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginaldee888a357ec29c71597049b25b353da45b3a06e)): ?>
<?php $component = $__componentOriginaldee888a357ec29c71597049b25b353da45b3a06e; ?>
<?php unset($__componentOriginaldee888a357ec29c71597049b25b353da45b3a06e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        Mousetrap.bind('del', function () {
            $('#product-reviews-table_wrapper .btn-delete').trigger('click');
        });

        DataTable.setRoutes('#product-reviews-table', {
            index: {
                name: 'admin.reviews.index',
                params: { productId: '<?php echo e($product->id); ?>' }
            },
            edit: { name: 'admin.reviews.edit' },
            destroy: { name: 'admin.reviews.destroy' },
        });

        new DataTable('#product-reviews-table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'reviewer_name' },
                { data: 'rating' },
                { data: 'status', name: 'is_approved', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Review/Resources/views/admin/products/tabs/reviews.blade.php ENDPATH**/ ?>