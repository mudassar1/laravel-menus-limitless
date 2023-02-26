<li class="nav-item nav-item-submenu {{ $item->hasActiveOnChild() ? 'active' : '' }}">
  <a href="#" class="nav-link">
    {{ $item->title }}
    <span class="caret"></span>
  </a>
  <ul class="nav-group-sub collapse">
    @foreach ($item->childs as $child)
    	@if ($child->hasChilds())
  			@include('menus::item.dropdown', ['item' => $child])
    	@else
  			@include('menus::item.item', ['item' => $child])
    	@endif
    @endforeach
  </ul>
</li>
