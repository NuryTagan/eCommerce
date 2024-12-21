<div>
    
    <h1>
        ALL TEACHERS
    </h1>


    <table border="2">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>Phone</th>
            <th>Operation</th>
            <th>Operation</th>
        </tr>
    </thead>
<tbody>
        @foreach ($list as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td><form action="{{ route('delete', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" 
                    onclick="return confirm('Are you sure you want to delete this teacher?')">DELETE</button>
            </form>
            <td><form action="{{ route('edit', $item->id) }}" method="post">
                @csrf
                <button type="submit">EDIT</button>
            </form>
            </td>
            

        </tr>
        @endforeach
    </tbody>
    </table>

    <br>
    <br>
    <a href="{{route('addteacher')}}">MAIN PAGE</a>
</div>




