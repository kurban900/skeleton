@props(['label', 'link'])


<li class="breadcrumb-item  {{ empty($link) ? 'active' : '' }}">
    @isset($link)
        <a href="{{ $link }}">{{ $label }}</a>
    @else
        {{ $label }}
    @endisset
</li>
