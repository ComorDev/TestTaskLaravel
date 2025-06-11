@php
    $modelClass = $fieldType['model'] ?? null;
    $text = $fieldType['text'] ?? '';
    $valAttr = $fieldType['value'] ?? '';
    $attributes = $attributes ?? [];
    $optionAttributes = $attributes['option'] ?? [];

    $options = [];
    if($modelClass == null){
        $options = $fieldType['options'] ?? [];
    } else {
        $options = $modelClass::all();
    }
@endphp

@if($modelClass == null)
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
@else
    <select name="{{$field}}">
        @foreach($modelClass::all() as $model)

            <option
            @foreach($optionAttributes as $k => $v)
                {{$k}}="{{$v}}"
            @endforeach
            @if($value == $model->$valAttr)
                selected
            @endif value="{{ $model->$valAttr }}">
            {{ $model->$text }}
            </option>
        @endforeach
    </select>
@endif
