<ul class="list-inline browse-categories">
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li :class="{ active: queryParams.category === '<?php echo e($category->slug); ?>' }">
            <a
                href="<?php echo e(route('categories.products.index', ['category' => $category->slug])); ?>"
                @click.prevent="changeCategory(<?php echo e($category); ?>)"
            >
                <?php echo e($category->name); ?>

            </a>

            <?php if($category->items->isNotEmpty()): ?>
                <?php echo $__env->make('public.products.index.browse_sub_categories', ['subCategories' => $category->items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/index/browse_categories.blade.php ENDPATH**/ ?>