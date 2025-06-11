@php
    $modelClass = $fieldType['model'] ?? null;
    $text = $fieldType['text'] ?? '';
    $attributes = $attributes ?? [];
    $optionAttributes = $attributes['option'] ?? [];

    $options = [];
    if($modelClass == null){
        $options = $fieldType['options'] ?? [];
    } else {
        $options = $modelClass::all();
    }
@endphp

<select name="{{$field}}">
    @foreach($options as $key => $val)

        <option
        @foreach($optionAttributes as $k => $v)
            {{$k}}="{{$v}}"
        @endforeach
        @if($value == $key)
            selected
        @endif value="{{ $key }}">
        {{ $val }}
        </option>
    @endforeach
</select>
