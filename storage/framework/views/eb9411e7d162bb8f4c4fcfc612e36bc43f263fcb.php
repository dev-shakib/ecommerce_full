<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::text('name', trans('slider::attributes.name'), $errors, $slider, ['required' => true])); ?>

        <?php echo e(Form::number('speed', trans('slider::attributes.speed'), $errors, $slider, ['placeholder' => trans('slider::sliders.form.300ms')])); ?>

        <?php echo e(Form::checkbox('fade', trans('slider::attributes.fade'), trans('slider::sliders.form.use_fade_instead_of_slide'), $errors, $slider)); ?>

        <?php echo e(Form::checkbox('autoplay', trans('slider::attributes.autoplay'), trans('slider::sliders.form.enable_autoplay'), $errors, $slider, ['checked' => true])); ?>


        <div class="autoplay-speed-field <?php echo e(($slider->autoplay ?? true) ? '' : 'hide'); ?>">
            <?php echo e(Form::number('autoplay_speed', trans('slider::attributes.autoplay_speed'), $errors, $slider, ['placeholder' => trans('slider::sliders.form.3000ms'), 'checked' => true])); ?>

        </div>

        <?php echo e(Form::checkbox('dots', trans('slider::attributes.dots'), trans('slider::sliders.form.show_dots'), $errors, $slider, ['checked' => true])); ?>

        <?php echo e(Form::checkbox('arrows', trans('slider::attributes.arrows'), trans('slider::sliders.form.show_arrows'), $errors, $slider, ['checked' => true])); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Slider/Resources/views/admin/sliders/tabs/settings.blade.php ENDPATH**/ ?>