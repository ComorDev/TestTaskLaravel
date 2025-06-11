@php
    $attributes2 = $fieldType['attributes'];

    $attributes = $attributes ?? [];
    if(isset($attributes['option'])){
        unset($attributes['option']);
    }
@endphp

<input value="{{ $value ?? null }}" name="{{$field}}" type="text"
@foreach($attributes2 as $key => $val)
    {{$key}}="{{$val}}"
@endforeach @foreach($attributes as $key => $val)
    {{$key}}="{{$val}}"
@endforeach>
