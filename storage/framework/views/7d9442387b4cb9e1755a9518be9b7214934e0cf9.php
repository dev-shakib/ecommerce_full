<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::text('translatable[storefront_welcome_text]', trans('storefront::attributes.storefront_welcome_text'), $errors, $settings)); ?>

        <?php echo e(Form::select('storefront_theme_color', trans('storefront::attributes.storefront_theme_color'), $errors, trans('storefront::themes'), $settings)); ?>


        <div class="<?php echo e(old('storefront_theme_color', array_get($settings, 'storefront_theme_color')) === 'custom_color' ? '' : 'hide'); ?>" id="custom-theme-color">
            <?php echo e(Form::color('storefront_custom_theme_color', trans('storefront::attributes.storefront_custom_theme_color'), $errors, $settings)); ?>

        </div>

        <?php echo e(Form::select('storefront_mail_theme_color', trans('storefront::attributes.storefront_mail_theme_color'), $errors, trans('storefront::themes'), $settings)); ?>


        <div class="<?php echo e(old('storefront_mail_theme_color', array_get($settings, 'storefront_mail_theme_color')) === 'custom_color' ? '' : 'hide'); ?>" id="custom-mail-theme-color">
            <?php echo e(Form::color('storefront_custom_mail_theme_color', trans('storefront::attributes.storefront_custom_mail_theme_color'), $errors, $settings)); ?>

        </div>

        <?php echo e(Form::select('storefront_slider', trans('storefront::attributes.storefront_slider'), $errors, $sliders, $settings)); ?>

        <?php echo e(Form::select('storefront_terms_page', trans('storefront::attributes.storefront_terms_page'), $errors, $pages, $settings)); ?>

        <?php echo e(Form::select('storefront_privacy_page', trans('storefront::attributes.storefront_privacy_page'), $errors, $pages, $settings)); ?>

        <?php echo e(Form::text('translatable[storefront_address]', trans('storefront::attributes.storefront_address'), $errors, $settings)); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/general.blade.php ENDPATH**/ ?>