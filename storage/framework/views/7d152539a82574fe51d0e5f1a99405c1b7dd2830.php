<aside class="sidebar-menu-wrap">
    <div class="sidebar-menu-header">
        <h4><?php echo e(trans('storefront::layout.navigation')); ?></h4>

        <div class="sidebar-menu-close">
            <i class="las la-times"></i>
        </div>
    </div>

    <ul class="nav nav-tabs sidebar-menu-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#main-menu">
                <?php echo e(trans('storefront::layout.menu')); ?>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#category-menu">
                <?php echo e(trans('storefront::layout.categories')); ?>

            </a>
        </li>
    </ul>

    <div class="tab-content custom-scrollbar">
        <div id="main-menu" class="tab-pane active">
            <?php echo $__env->make('public.layout.sidebar_menu.menu', ['type' => 'primary_menu', 'menu' => $primaryMenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div id="category-menu" class="tab-pane">
            <?php echo $__env->make('public.layout.sidebar_menu.menu', ['type' => 'category_menu', 'menu' => $categoryMenu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</aside>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/sidebar_menu.blade.php ENDPATH**/ ?>