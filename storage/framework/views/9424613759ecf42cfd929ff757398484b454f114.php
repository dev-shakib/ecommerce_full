<?php $__env->startSection('title'); ?>
    <?php if(request()->has('query')): ?>
        <?php echo e(trans('storefront::products.search_results_for')); ?>: "<?php echo e(request('query')); ?>"
    <?php else: ?>
        <?php echo e(trans('storefront::products.shop')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('globals'); ?>
    <script>
        FleetCart.langs['storefront::products.showing_results'] = '<?php echo e(trans("storefront::products.showing_results")); ?>';
        FleetCart.langs['storefront::products.show_more'] = '<?php echo e(trans("storefront::products.show_more")); ?>';
        FleetCart.langs['storefront::products.show_less'] = '<?php echo e(trans("storefront::products.show_less")); ?>';
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <product-index
        initial-query="<?php echo e(request('query')); ?>"
        initial-brand-name="<?php echo e($brandName ?? ''); ?>"
        initial-brand-banner="<?php echo e($brandBanner ?? ''); ?>"
        initial-brand-slug="<?php echo e(request('brand')); ?>"
        initial-category-name="<?php echo e($categoryName ?? ''); ?>"
        initial-category-banner="<?php echo e($categoryBanner ?? ''); ?>"
        initial-category-slug="<?php echo e(request('category')); ?>"
        initial-tag-name="<?php echo e($tagName ?? ''); ?>"
        initial-tag-slug="<?php echo e(request('tag')); ?>"
        :initial-attribute="<?php echo e(json_encode(request('attribute', []))); ?>"
        :max-price="<?php echo e($maxPrice); ?>"
        initial-sort="<?php echo e(request('sort', 'latest')); ?>"
        :initial-per-page="<?php echo e(request('perPage', 30)); ?>"
        :initial-page="<?php echo e(request('page', 1)); ?>"
        initial-view-mode="<?php echo e(request('viewMode', 'grid')); ?>"
        inline-template
    >
        <section class="product-search-wrap">
            <div class="container">
                <div class="product-search">
                    <div class="product-search-left">
                        <?php if($categories->isNotEmpty()): ?>
                            <div class="d-none d-lg-block browse-categories-wrap">
                                <h4 class="section-title">
                                    <?php echo e(trans('storefront::products.browse_categories')); ?>

                                </h4>

                                <?php echo $__env->make('public.products.index.browse_categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endif; ?>

                        <?php echo $__env->make('public.products.index.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('public.products.index.latest_products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="product-search-right" v-cloak>
                        <div class="d-none d-lg-block categories-banner" v-if="brandBanner">
                            <img :src="brandBanner" alt="Brand banner">
                        </div>

                        <div class="d-none d-lg-block categories-banner" v-else-if="categoryBanner">
                            <img :src="categoryBanner" alt="Category banner">
                        </div>

                        <div class="search-result">
                            <div class="search-result-top">
                                <div class="content-left">
                                    <h4 v-if="queryParams.query">
                                        <?php echo e(trans('storefront::products.search_results_for')); ?> <span>"{{ queryParams.query }}"</span>
                                    </h4>
                                    <h4 v-else-if="queryParams.brand" v-text="initialBrandName"></h4>
                                    <h4 v-else-if="queryParams.category" v-text="categoryName"></h4>
                                    <h4 v-else-if="queryParams.tag" v-text="initialTagName"></h4>
                                    <h4 v-else><?php echo e(trans('storefront::products.shop')); ?></h4>
                                </div>

                                <div class="content-right">
                                    <div class="mobile-view-filter">
                                        <i class="las la-sliders-h"></i>
                                        <?php echo e(trans('storefront::products.filters')); ?>

                                    </div>

                                    <div class="sorting-bar">
                                        <div class="view-type">
                                            <button
                                                type="submit"
                                                class="btn btn-list-view"
                                                :class="{ active: viewMode === 'list' }"
                                                title="<?php echo e(trans('storefront::products.list_view')); ?>"
                                                @click="viewMode = 'list'"
                                            >
                                                <i class="las la-list"></i>
                                            </button>

                                            <button
                                                type="submit"
                                                class="btn btn-grid-view"
                                                :class="{ active: viewMode === 'grid' }"
                                                title="<?php echo e(trans('storefront::products.grid_view')); ?>"
                                                @click="viewMode = 'grid'"
                                            >
                                            <i class="las la-th-large"></i>
                                        </button>
                                        </div>

                                        <div class="form-group m-r-20">
                                            <select
                                                class="form-control custom-select-option right arrow-black"
                                                v-model="queryParams.sort"
                                                ref="sortSelect"
                                            >
                                                <?php $__currentLoopData = trans('storefront::products.sort_options'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($key); ?>"
                                                        <?php echo e(request('sort', 'latest') === $key ? 'selected' : ''); ?>

                                                    >
                                                        <?php echo e($value); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select
                                                class="form-control custom-select-option right arrow-black"
                                                v-model="queryParams.perPage"
                                                ref="perPageSelect"
                                            >
                                                <?php $__currentLoopData = trans('storefront::products.per_page_options'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($key); ?>"
                                                        <?php echo e(request('perPage', 30) == $key ? 'selected' : ''); ?>

                                                    >
                                                        <?php echo e($value); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="search-result-middle" :class="{ empty: emptyProducts, loading: fetchingProducts }">
                                <div class="grid-view-products" v-if="viewMode === 'grid'">
                                    <product-card-grid-view v-for="product in products.data" :key="product.id" :product="product"></product-card-grid-view>
                                </div>

                                <div class="list-view-products" v-if="viewMode === 'list'">
                                    <product-card-list-view v-for="product in products.data" :key="product.id" :product="product"></product-card-list-view>
                                </div>

                                <div class="empty-message" v-if="! fetchingProducts && emptyProducts">
                                    <?php echo $__env->make('public.products.index.empty_results_logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <h2><?php echo e(trans('storefront::products.no_product_found')); ?></h2>
                                </div>
                            </div>

                            <div class="search-result-bottom" v-if="! emptyProducts">
                                <span class="showing-results" v-text="showingResults"></span>

                                <v-pagination
                                    :total-page="totalPage"
                                    :current-page="queryParams.page"
                                    @page-changed="changePage"
                                    v-if="products.total > queryParams.perPage"
                                >
                                </v-pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </product-index>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce_full\Themes\Storefront\views/public/products/index.blade.php ENDPATH**/ ?>