<?php if($product->hasAnyAttribute()): ?>
    <div id="specification" class="tab-pane specification" :class="{ active: activeTab === 'specification' }">
        <div class="specification-inner">
            <?php $__currentLoopData = $product->attributeSets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeSet => $attributes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="specification-row">
                    <div class="title">
                        <h5><?php echo e($attributeSet); ?></h5>
                    </div>

                    <ul class="list-inline specification-list">
                        <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label><?php echo e($attribute->name); ?></label>
                                <span><?php echo e($attribute->values->implode('value', ', ')); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/tab_specification.blade.php ENDPATH**/ ?>