<div class="slide-options caption-<?php echo e($captionNumber); ?>">
    <h4><?php echo e(trans("slider::sliders.slide.form.caption_{$captionNumber}")); ?></h4>

    <div class="form-group">
        <div class="col-md-12 p-l-0">
            <label class="control-label col-lg-2 col-md-3 col-sm-3 col-xs-12 text-left p-l-0" for="slides-<%- slideNumber %>-caption-<?php echo e($captionNumber); ?>-delay">
                <?php echo e(trans("slider::attributes.caption_{$captionNumber}_delay")); ?>

            </label>

            <div class="col-lg-4 col-md-7 col-sm-6 col-xs-7 p-l-0">
                <input type="number"
                    name="slides[<%- slideNumber %>][options][caption_<?php echo e($captionNumber); ?>][delay]"
                    class="form-control"
                    id="slides-<%- slideNumber %>-caption-<?php echo e($captionNumber); ?>-delay"
                    placeholder="<?php echo e(trans('slider::sliders.slide.form.' . ($captionNumber === 1 ? '0s' : '0_3s'))); ?>"
                    value="<%- slide.options.caption_<?php echo e($captionNumber); ?>.delay %>"
                    step="0.01"
                >
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12 p-l-0">
            <label class="control-label col-lg-2 col-md-3 col-sm-3 col-xs-12 text-left p-l-0" for="slides-<%- slideNumber %>-caption-<?php echo e($captionNumber); ?>-effect">
                <?php echo e(trans("slider::attributes.caption_{$captionNumber}_effect")); ?>

            </label>

            <div class="col-lg-4 col-md-7 col-sm-6 col-xs-7 p-l-0">
                <select name="slides[<%- slideNumber %>][options][caption_<?php echo e($captionNumber); ?>][effect]"
                    class="form-control custom-select-black"
                    id="slides-<%- slideNumber %>-caption-<?php echo e($captionNumber); ?>-effect"
                >
                    <?php $__currentLoopData = trans('slider::sliders.effects'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $effect => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($effect); ?>" <%= slide.options.caption_<?php echo e($captionNumber); ?>.effect === '<?php echo e($effect); ?>' ? 'selected' : '' %>>
                            <?php echo e($name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Slider/Resources/views/admin/sliders/templates/partials/slide_caption.blade.php ENDPATH**/ ?>