#
<input readonly value="{{$model->id}}">
<br/>
@foreach($model->getFillable() as $field)
    @php
        $fieldType = $model::getFieldTypes()[$field];
    @endphp
    @if(!is_array($fieldType))
        <input readonly="readonly" type="{{ $fieldType }}" name="{{$field}}" value="{{$model->$field}}">
    @else
        @if($fieldType['type'] == 'number')
            @include('crud.components.' . $fieldType['type'], [
                'field' => $field,
                'classModel' => $model,
                'route' => $route,
                'fieldType' => $fieldType,
                'value' => $model->$field,
                'attributes' => []
                ])
        @else
            @include('crud.components.' . $fieldType['type'], [
            'field' => $field,
            'classModel' => $model,
            'route' => $route,
            'fieldType' => $fieldType,
            'value' => $model->$field,
            'attributes' => [
                'option' => [
                    'disabled' => 'disabled'
                ]
            ]
            ])
        @endif
    @endif
@endforeach
<a href="{{ route($route . '.edit', [$model]) }}">Редактировать</a>
<form action="{{ route($route . '.destroy', [$model]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Удалить</button>
</form>
