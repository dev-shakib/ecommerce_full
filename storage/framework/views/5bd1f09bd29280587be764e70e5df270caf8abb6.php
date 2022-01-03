<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::checkbox('storefront_top_brands_section_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_brands_section'), $errors, $settings)); ?>

        <?php echo e(Form::select('storefront_top_brands', trans('storefront::attributes.storefront_top_brands'), $errors, $brands, setting(), ['class' => 'selectize prevent-creation', 'multiple' => true])); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/admin/storefront/tabs/top_brands.blade.php ENDPATH**/ ?>