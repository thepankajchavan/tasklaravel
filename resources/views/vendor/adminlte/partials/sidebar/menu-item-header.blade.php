@isset($item['role'])
@if($item['role'] == auth()->user()->role)
<li @isset($item['id']) id="{{ $item['id'] }}" @endisset class="nav-header {{ $item['class'] ?? '' }}">

    {{ is_string($item) ? $item : $item['header'] }}

</li>
@endif
@endisset