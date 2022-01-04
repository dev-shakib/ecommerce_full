<ul class="list-inline">
    <?php $__currentLoopData = $subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="<?php echo e($subMenu->hasItems() ? 'dropdown sub-menu' : ''); ?>">
            <a href="<?php echo e($subMenu->url()); ?>" target="<?php echo e($subMenu->target()); ?>">
                <?php echo e($subMenu->name()); ?>

            </a>

            <?php if($subMenu->hasItems()): ?>
                <?php echo $__env->make('public.layout.sidebar_menu.dropdown', ['subMenus' => $subMenu->items()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/sidebar_menu/dropdown.blade.php ENDPATH**/ ?>