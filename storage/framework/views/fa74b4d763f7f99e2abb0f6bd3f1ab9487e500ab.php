<?php $__env->startPush('shortcuts'); ?>
    <?php if(isset($menu)): ?>
        <dl class="dl-horizontal">
            <dt><code>c</code></dt>
            <dd><?php echo e(trans('admin::resource.create', ['resource' => trans('menu::menu_items.menu_item')])); ?></dd>
        </dl>
    <?php endif; ?>

    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd><?php echo e(trans('admin::admin.shortcuts.back_to_index', ['name' => trans('menu::menus.menu')])); ?></dd>
    </dl>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        keypressAction([
            <?php if(isset($menu)): ?>
                { key: 'c', route: "<?php echo e(route('admin.menus.items.create', $menu)); ?>" },
            <?php endif; ?>

            { key: 'b', route: "<?php echo e(route('admin.menus.index')); ?>" },
        ]);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Menu/Resources/views/admin/menus/partials/shortcuts.blade.php ENDPATH**/ ?>