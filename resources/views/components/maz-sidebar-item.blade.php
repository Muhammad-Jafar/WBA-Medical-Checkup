@props(['icon', 'link', 'name', 'route'])

@php
    $routeName = Request::route()->getName();
    $active = $routeName === $route;
    $classes = $active ? 'sidebar-item active ' : 'sidebar-item';
@endphp

<li class="{{ $classes }} {{ request()->routeIs($slot) ? 'active' : '' }}">
    <a href="{{ $slot->isEmpty() ? $link : '#' }}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>
    @if(!$slot->isEmpty())
        <ul class="submenu {{ request()->routeIs($slot) ? 'active' : '' }}"
            style="display: {{ $active ? 'block' : 'none' }};">
            {{$slot}}
        </ul>
    @endif
</li>
