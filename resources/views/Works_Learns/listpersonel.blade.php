<div>
    <h1>LIST OF ALL PERSONELS</h1>

    <br>
<form action="deletemulti" method="post">
    @csrf
    <button>DELETE</button>
    <table border="1">
        <tr>
            <th>Selection</th>
            <th>ID</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>EMAIL</th>
            <th>OPERATIONS</th>
        </tr>

        @foreach ($listpersonel as $item)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$item->id}}"></td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->surname }}</td>
                <td>{{ $item->email }}</td>
                {{-- <td><form action="{{route('deletepersonel', $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                <button type="submit">DELETE</button>    
                </form>
                </td>
                <td><form action="{{route('editpersonel', $item->id)}}" method="post">
                    @csrf
                    
                <button type="submit">EDIT</button>    
                </form> --}}
                </td>
            </tr>
        @endforeach
    </table>
</form>
    <br>
    <form action="addpersonel" method="get">

        <button type="submit">ADD NEW PERSONEL</button>
    </form> 
    {{ $listpersonel->links() }} <br><br>


<form action="{{route('search')}}" method="get">
    
    <h3>
        Search DATA
    </h3>
    <input type="text" name="search" placeholder="Enter the name" value="{{@$search}}">
    <br><br>
    <button type="submit">SEARCH</button>
</form>

<style>
    .w-5.h-5{
        width: 15px
    }
</style>

</div>
