<div class="row">
    <div class="col-md-18">
        <div class="form-group order-notes">
            <label for="order-note">
                <?php echo e(trans('checkout::attributes.order_note')); ?>

            </label>

            <textarea
                name="order_note"
                v-model="form.order_note"
                cols="30"
                rows="4"
                id="order-note"
                class="form-control"
                placeholder="<?php echo e(trans('storefront::checkout.special_note_for_delivery')); ?>"
            ></textarea>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/checkout/create/form/order_note.blade.php ENDPATH**/ ?>