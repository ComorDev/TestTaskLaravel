<table class="table">
    <thead>
    <tr>
        <th scope="col">{{ $model::getNames()['id'] }}</th>
        @foreach($model->getFillable() as $field)
            <th scope="col">{{  $model::getNames()[$field] }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">{{ $model->id }}</th>
        @foreach($model::getShowOnIndexPage() as $field)
            <td>{{ $model->$field }}</td>
        @endforeach
        <td><a href="{{ route($route . '.edit', [$model]) }}">Редактировать</a></td>
        <form action="{{ route($route . '.destroy', [$model]) }}" method="post">
            @csrf
            @method('DELETE')
            <td>
                <button type="submit">Удалить</button>
            </td>
        </form>
    </tr>
    </tbody>
</table>
