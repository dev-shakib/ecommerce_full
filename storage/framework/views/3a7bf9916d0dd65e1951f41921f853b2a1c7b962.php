<div class="category-nav <?php echo e(request()->routeIs('home') ? 'show' : ''); ?>">
    

    <?php if($categoryMenu->menus()->isNotEmpty()): ?>
        <div class="category-dropdown-wrap">
            <div class="category-nav-inner">
                <?php echo e(trans('storefront::layout.all_categories_header')); ?>

                <i class="las la-bars"></i>
            </div>
            <div class="category-dropdown">
                <ul class="list-inline mega-menu vertical-megamenu">
                    <?php $__currentLoopData = $categoryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('public.layout.navigation.menu', ['type' => 'category_menu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <li class="more-categories">
                        <a href="<?php echo e(route('categories.index')); ?>" class="menu-item">
                            <span class="menu-item-icon">
                                <i class="las la-plus-square"></i>
                            </span>

                            <?php echo e(trans('storefront::layout.all_categories')); ?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/layout/navigation/category_menu.blade.php ENDPATH**/ ?>