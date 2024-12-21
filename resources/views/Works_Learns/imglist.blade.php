<div>
    <h1>
        IMAGE LIST
    </h1>

    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
        </tr>

        @foreach ($imglist as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->path }}</td>
            </tr>
        @endforeach
       
    </table>
    <a href="{{route('uploadimage')}}">ADD NEW</a>
</div>
