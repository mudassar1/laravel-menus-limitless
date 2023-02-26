@if ($item->isDivider())
	<li class="divider"></li>
@elseif ($item->isHeader())
	<li class="nav-item-header">
		<div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">{{$item->title}}</div>
		<i class="ph-dots-three sidebar-resize-show"></i>
	</li>
@else
	<li class="nav-item {{ $item->isActive() ? 'active' : '' }}">
	  <a href="{{ $item->getUrl() }}" class="nav-link" {!! $item->getAttributes() !!}>
	  	{!! $item->getIcon() !!}
	    {{ $item->title }}
	  </a>
	</li>
@endif
