@props(['icon', 'link', 'name'])

@php
$routeName = Request::route()->getName();
$active = str_contains($routeName, strtolower($name));
$classes = $active ? 'sidebar-item active ' : 'sidebar-item';
@endphp

<li class="{{ $classes }} {{$slot->isEmpty() ? '' : 'has-sub'}} {{ request()->routeIs($slot) ? 'active' : '' }}">
    <a href="{{ $slot->isEmpty() ? $link : '#' }}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>
    @if(!$slot->isEmpty())
        <ul class="submenu {{ request()->routeIs($slot) ? 'active' : '' }}" style="display: {{ $active ? 'block' : 'none' }};">
            {{$slot}}
        </ul>
    @endif
</li>
