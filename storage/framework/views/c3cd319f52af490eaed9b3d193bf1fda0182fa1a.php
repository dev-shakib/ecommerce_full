<?php $__env->startPush('shortcuts'); ?>
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd><?php echo e(trans('admin::admin.shortcuts.back_to_index', ['name' => trans('product::products.product')])); ?></dd>
    </dl>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        keypressAction([
            { key: 'b', route: "<?php echo e(route('admin.products.index')); ?>" },
        ]);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Product/Resources/views/admin/products/partials/shortcuts.blade.php ENDPATH**/ ?>