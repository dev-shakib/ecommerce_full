<section class="navigation-wrap">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            @include('public.layout.navigation.primary_menu')
            <span class="navigation-text">
                <i class="las la-lightbulb"></i>
                {{ setting('storefront_navbar_text') }}
            </span>
        </div>

        <div class="navigation-inner">
            @include('public.layout.navigation.category_menu')
        </div>
    </div>
</section>
