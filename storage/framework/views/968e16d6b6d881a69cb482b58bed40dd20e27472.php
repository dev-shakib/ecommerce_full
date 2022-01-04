<?php if($subMenus->isNotEmpty()): ?>
    <ul class="list-inline sub-menu">
        <?php $__currentLoopData = $subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php echo e($subMenu->hasItems() ? 'dropdown' : ''); ?>">
                <a href="<?php echo e($subMenu->url()); ?>" target="<?php echo e($subMenu->target()); ?>">
                    <?php echo e($subMenu->name()); ?>

                </a>

                <?php if($subMenu->hasItems()): ?>
                    <?php echo $__env->make('public.layout.navigation.dropdown', ['subMenus' => $subMenu->items()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/navigation/dropdown.blade.php ENDPATH**/ ?>