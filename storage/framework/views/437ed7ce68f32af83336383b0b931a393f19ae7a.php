<div id="slides-wrapper" class="clearfix">
    
</div>

<div class="form-group">
    <button type="button" class="add-slide btn btn-default m-l-15">
        <?php echo e(trans('slider::sliders.slide.add_slide')); ?>

    </button>
</div>

<?php echo $__env->make('slider::admin.sliders.templates.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('globals'); ?>
    <script>
        FleetCart.data['slider.slides'] = <?php echo old_json('slides', $slider->slides); ?>;
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Slider/Resources/views/admin/sliders/tabs/slides.blade.php ENDPATH**/ ?>