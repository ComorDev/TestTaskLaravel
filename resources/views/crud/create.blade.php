<form action="{{ route($route . '.store') }}" method="post">
    @csrf

    <br/>
    @foreach($classModel::getAllField() as $field)
        {{$classModel::getNames()[$field]}}

        @php
            $fieldType = $classModel::getFieldTypes()[$field];
        @endphp

        @if(!is_array($fieldType))
            <input type="{{ $fieldType }}" name="{{$field}}" value="">
        @else

            @include('crud.components.' . $fieldType['type'], [
                'field' => $field,
                'classModel' => $classModel,
                'route' => $route,
                'fieldType' => $fieldType,
                'value' => null
                ])
        @endif

        <br/>
    @endforeach

    <button type="submit">Добавить</button>
</form>
