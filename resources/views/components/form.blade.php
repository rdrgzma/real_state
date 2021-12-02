@props([
'method',
'action',
'hasFiles' => false,
'model'
])

@php
    $method = strtoupper($method);
@endphp

<form method="{{ $method}}"
      action="{{ $action }}" {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes }}>
    @csrf

    {{ $slot }}
</form>
