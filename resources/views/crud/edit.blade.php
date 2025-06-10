<form action="{{ route($route . '.update', [$model]) }}" method="post">
    @csrf
    @method('PUT')
    #
    <input readonly value="{{$model->id}}">
    <br/>
    @foreach($model->getFillable() as $field)
        {{$model::getNames()[$field]}}

        @php
            $fieldType = $model::getFieldTypes()[$field];
        @endphp

        @if(!is_array($fieldType))
            <input type="{{ $fieldType }}" name="{{$field}}" value="{{$model->$field}}">
        @else

            @include('crud.components.' . $fieldType['type'], [
                'field' => $field,
                'classModel' => $model,
                'route' => $route,
                'fieldType' => $fieldType,
                'value' => $model->$field
                ])
        @endif

        <br/>
    @endforeach

    <button type="submit">Сохранить</button>
</form>
