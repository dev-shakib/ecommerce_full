<ul>
    <?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li :class="{ active: queryParams.category === '<?php echo e($subCategory->slug); ?>' }">
            <a
                href="<?php echo e(route('categories.products.index', ['category' => $subCategory->slug])); ?>"
                @click.prevent="changeCategory(<?php echo e($subCategory); ?>)"
            >
                <?php echo e($subCategory->name); ?>

            </a>

            <?php if($subCategory->items->isNotEmpty()): ?>
                <?php echo $__env->make('public.products.index.browse_sub_categories', ['subCategories' => $subCategory->items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/index/browse_sub_categories.blade.php ENDPATH**/ ?>