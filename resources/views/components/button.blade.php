@props(['label', 'type' => 'button', 'name'])

<button
    class="bg-[#1679AB] px-3 py-1 rounded-xl text-white text-xs font-semibold hover:bg-[#BBE9FF] hover:text-gray-800"
    type="{{ $type }}" name="{{ $name }}">
    {{$label}}
</button>