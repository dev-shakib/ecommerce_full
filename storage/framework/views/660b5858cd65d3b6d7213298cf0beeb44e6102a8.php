<div class="form-group variant-radio">
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <label>
                <?php echo $option->name .
                    ($option->is_required ? '<span>*</span>' : ''); ?>

            </label>
        </div>

        <div class="col-xl-10 col-lg-12">
            <?php $__currentLoopData = $option->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-radio">
                    <input
                        type="radio"
                        name="options[<?php echo e($option->id); ?>]"
                        value="<?php echo e($value->id); ?>"
                        id="option-<?php echo e($option->id); ?>-value-<?php echo e($value->id); ?>"
                        v-model="cartItemForm.options[<?php echo e($option->id); ?>]"
                    >

                    <label for="option-<?php echo e($option->id); ?>-value-<?php echo e($value->id); ?>">
                        <?php echo $value->label .
                            $value->formattedPriceForProduct($product); ?>

                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <span
                class="error-message"
                v-if="errors.has('<?php echo e("options.{$option->id}"); ?>')"
                v-text="errors.get('<?php echo e("options.{$option->id}"); ?>')"
            >
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/show/custom_options/radio.blade.php ENDPATH**/ ?>