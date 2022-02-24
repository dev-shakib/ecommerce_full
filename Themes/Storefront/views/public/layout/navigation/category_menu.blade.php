<div class="category-nav {{ request()->routeIs('home') ? 'show' : '' }}">

        <div class="category-dropdown-wrap">
            <div class="category-nav-inner">
                {{ trans('storefront::layout.all_categories_header') }}
                <i class="las la-bars"></i>
            </div>
            <div class="category-dropdown">
                <ul class="list-inline mega-menu vertical-megamenu">

                    @foreach ($categoryMenu as $item)
                    @if ($item->is_show_in_menu)
                        <li class="dropdown multi-level">
                            <a href="{{url("categories/$item->slug/products")}}" class="nav-link menu-item"  data-text="">
                                {{ $item->name }}
                            </a>
                            @if (count($item->items) > 0)
                                <ul class="list-inline sub-menu">
                                    @foreach ($item->items as $item)
                                    <li class="">
                                        <a href="{{url("categories/$item->slug/products")}}" target="">
                                            {{ $item->name }}
                                        </a>

                                        </li>
                                    @endforeach

                                </ul>
                            @endif
                        </li>
                    @endif

                    @endforeach

                    <li class="more-categories">
                        <a href="{{ route('categories.index') }}" class="menu-item">
                            <span class="menu-item-icon">
                                <i class="las la-plus-square"></i>
                            </span>

                            {{ trans('storefront::layout.all_categories') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
