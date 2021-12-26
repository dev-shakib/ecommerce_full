<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::number('price', trans('product::attributes.price'), $errors, $product, ['min' => 0, 'required' => true])); ?>

        <?php echo e(Form::number('special_price', trans('product::attributes.special_price'), $errors, $product, ['min' => 0])); ?>

        <?php echo e(Form::select('special_price_type', trans('product::attributes.special_price_type'), $errors, trans('product::products.form.price_types'), $product)); ?>

        <?php echo e(Form::text('special_price_start', trans('product::attributes.special_price_start'), $errors, $product, ['class' => 'datetime-picker'])); ?>

        <?php echo e(Form::text('special_price_end', trans('product::attributes.special_price_end'), $errors, $product, ['class' => 'datetime-picker'])); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Product/Resources/views/admin/products/tabs/price.blade.php ENDPATH**/ ?>