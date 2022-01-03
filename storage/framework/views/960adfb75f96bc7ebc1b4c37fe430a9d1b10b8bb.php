<?php $__env->startPush('shortcuts'); ?>
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd><?php echo e(trans('admin::admin.shortcuts.back_to_index', ['name' => trans('slider::sliders.slider')])); ?></dd>
    </dl>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        keypressAction([
            { key: 'b', route: "<?php echo e(route('admin.sliders.index')); ?>" }
        ]);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Slider/Resources/views/admin/sliders/partials/shortcuts.blade.php ENDPATH**/ ?>