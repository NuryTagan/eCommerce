<div>
    <h1>DB DATA</h1>
    <form action="search" method="get">
        <input type="text" name="search" 
        placeholder="search with name" 
        value={{@$search}}> 
        <button>SEARCH</button>
        
    </form>
    <a href="{{ route('list') }}">Main LIST</a>
<br>
<br>

    <form action="delete-multi" method="post">
        @csrf
        <button>DELETE</button>
    <table border="1">
<tr>
    <td>Selection</td>
    <td>ID</td>
    <td>USERNAME</td>
    <td>EMAIL</td>
    <td>PASSWORD</td>
</tr>

    @foreach ($student as $data)
    <tr>
        <td><input type="checkbox" name="ids[]" value="{{ $data->id }}"></td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->password }}</td>
    </tr>
        
    @endforeach
</table>
</form>
<br>
<br>
{{ $student->links()}}

    
</div>

<style>
    .w-5.h-5{
        width: 15px
    }
</style>
