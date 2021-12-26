<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('product::products.form.base_image'),
    'inputName' => 'files[base_image]',
    'file' => $product->base_image,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="media-picker-divider"></div>

<?php echo $__env->make('media::admin.image_picker.multiple', [
    'title' => trans('product::products.form.additional_images'),
    'inputName' => 'files[additional_images][]',
    'files' => $product->additional_images,
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Product/Resources/views/admin/products/tabs/images.blade.php ENDPATH**/ ?>