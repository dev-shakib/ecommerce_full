<span data-toggle="tooltip" title="<?php echo e(is_null($date) ? '' : $date->toFormattedDateString()); ?>">
    <?php echo is_null($date) ? '&mdash;' : $date->diffForHumans(); ?>

</span>
<?php /**PATH C:\laragon\www\ecommerce_full\Modules/Admin/Resources/views/partials/table/date.blade.php ENDPATH**/ ?>