<table class="table">
    <td><a href="{{ route($route . '.create') }}">Создать</a></td>
    <thead>
    <tr>
        <th scope="col">{{ $classModel::getNames()['id'] }}</th>
        @foreach($classModel::getShowOnIndexPage() as $field)
            <th scope="col">{{  $classModel::getNames()[$field] }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($models as $model)
        <tr>
            <th scope="row">{{ $model->id }}</th>
            @foreach($model::getShowOnIndexPage() as $field)
                <td>{{ $model->$field }}</td>
            @endforeach
            <td><a href="{{ route($route . '.show', [$model]) }}">Просмотр</a></td>
            <td><a href="{{ route($route . '.edit', [$model]) }}">Редактировать</a></td>
            <form action="{{ route($route . '.destroy', [$model]) }}" method="post">
                @csrf
                @method('DELETE')
                <td>
                    <button type="submit">Удалить</button>
                </td>
            </form>
        </tr>
    @endforeach
    </tbody>
</table>
