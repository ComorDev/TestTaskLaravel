<form action="{{ route($route . '.update', [$model]) }}" method="post">
    @csrf
    @method('PUT')
    #
    <input readonly value="{{$model->id}}">
    <br/>
    @foreach($model->getFillable() as $field)
        {{$model::getNames()[$field]}}
        <input name="{{$field}}" value="{{$model->$field}}">
        <br/>
    @endforeach

    <button type="submit">Сохранить</button>
</form>
