@php
    $modelClass = $fieldType['model'];
    $text = $fieldType['text'];
    $attributes = $attributes ?? [];
    $optionAttributes = $attributes['option'] ?? [];
@endphp

<select name="{{$field}}[]" multiple>
    @foreach($modelClass::all() as $model)

        <option
        @foreach($optionAttributes as $key => $val)
            {{$key}}="{{$val}}"
        @endforeach
        @if(in_array($model->id, $value ?? []))
            selected
        @endif value="{{ $model->id }}">
        {{ $model->$text }}
        </option>
    @endforeach
</select>
