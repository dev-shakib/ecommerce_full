<ul class="list-inline sidebar-menu">
    <?php $__currentLoopData = $menu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo e($menu->hasSubMenus() ? 'dropdown multi-level' : ''); ?>">
            <a href="<?php echo e($menu->url()); ?>" class="menu-item" target="<?php echo e($menu->target()); ?>">
                <?php if($type === 'category_menu' && $menu->hasIcon()): ?>
                    <span class="menu-item-icon">
                        <i class="<?php echo e($menu->icon()); ?>"></i>
                    </span>
                <?php endif; ?>

                <?php echo e($menu->name()); ?>

            </a>

            <?php if($menu->hasSubMenus()): ?>
                <?php echo $__env->make('public.layout.sidebar_menu.dropdown', ['subMenus' => $menu->subMenus()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($type === 'category_menu'): ?>
        <li class="more-categories">
            <a href="<?php echo e(route('categories.index')); ?>" class="menu-item">
                <span class="menu-item-icon">
                    <i class="las la-plus-square"></i>
                </span>

                <?php echo e(trans('storefront::layout.all_categories')); ?>

            </a>
        </li>
    <?php endif; ?>
</ul>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/sidebar_menu/menu.blade.php ENDPATH**/ ?>