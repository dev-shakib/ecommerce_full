<div class="thumbnail-holder">
    <?php if($file->exists): ?>
        <img src="<?php echo e($file->path); ?>" alt="thumbnail">
    <?php else: ?>
        <i class="fa fa-picture-o"></i>
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Admin/Resources/views/partials/table/image.blade.php ENDPATH**/ ?>