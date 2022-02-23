
<ul class="list-inline sidebar-menu">
    @foreach ($categoryMenu as $item)
        <li class="dropdown multi-level">
            <a href="{{url("categories/$item->slug/products")}}" class="menu-item" target="">

               {{ $item->name }}
            </a>
        </li>
    @endforeach

</ul>

