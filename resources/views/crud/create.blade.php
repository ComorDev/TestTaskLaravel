<form action="{{ route($route . '.store') }}" method="post">
    @csrf
    <br/>
    @foreach($classModel::getAllField() as $field)
        {{$classModel::getNames()[$field]}}
        <input name="{{$field}}" value="">
        <br/>
    @endforeach

    <button type="submit">Добавить</button>
</form>
