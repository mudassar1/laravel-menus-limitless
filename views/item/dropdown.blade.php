<li class="nav-item nav-item-submenu {{ $item->hasActiveOnChild() ? 'nav-item-open' : '' }}">
  <a href="#" class="nav-link {{ $item->hasActiveOnChild() ? 'active' : '' }}">
    {{ $item->title }}
    <span class="caret"></span>
  </a>
  <ul class="nav-group-sub collapse {{ $item->hasActiveOnChild() ? 'show' : '' }}">
    @foreach ($item->childs as $child)
      @if ($child->hasChilds())
        @include('menus::item.dropdown', ['item' => $child])
      @else
        @include('menus::item.item', ['item' => $child])
      @endif
    @endforeach
  </ul>
</li>
