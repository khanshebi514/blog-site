@props(['linkUrl' => '#', 'label', 'type' => 'link'])

@php
    $classes = "font-bold text-sm uppercase ";

    if ($type === 'link') {
        $classes .= " text-white hover:text-stone-300";
    }

    if ($type === 'button') {
        $classes .= " bg-[#1679AB] px-3 py-1 rounded-xl text-white text-xs font-semibold hover:bg-[#BBE9FF] hover:text-gray-800";
    }
@endphp

<li class="text-white list-none">
    <a class=" {{$classes}} " href="{{ $linkUrl }}">
        {{ $label }}
    </a>
</li>