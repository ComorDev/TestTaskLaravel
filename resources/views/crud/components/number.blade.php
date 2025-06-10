@php
    $attributes2 = $fieldType['attributes'];

    $attributes = $attributes ?? [];
@endphp

<input value="{{ $value ?? null }}" name="{{$field}}" type="number"
@foreach($attributes2 as $key => $val)
    {{$key}}="{{$val}}"
@endforeach @foreach($attributes as $key => $val)
    {{$key}}="{{$val}}"
@endforeach>
