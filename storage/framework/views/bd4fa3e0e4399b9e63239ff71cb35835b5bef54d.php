<nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav mega-menu horizontal-megamenu">
        <?php $__currentLoopData = $primaryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('public.layout.navigation.menu', ['type' => 'primary_menu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/navigation/primary_menu.blade.php ENDPATH**/ ?>