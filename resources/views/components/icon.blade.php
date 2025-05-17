@props(['name', 'width' => 18, 'height' => 18])

<i
    data-lucide="{{ $name }}"
    @if ($width) width="{{ $width }}" @endif
    @if ($height) height="{{ $height }}" @endif
    {{ $attributes }}
></i>
