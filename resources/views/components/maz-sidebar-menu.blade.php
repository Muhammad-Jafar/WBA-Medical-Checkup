@props(['titleMenu'])

<li class="sidebar-title text-gray-600 text-lg mb-0">{{ $titleMenu }}</li>
{{ $slot ?? '' }}
<hr>
