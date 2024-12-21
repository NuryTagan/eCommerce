<div>
     <h1>
        EDIT TABLE
    </h1>

    <form action="{{ route('updatestudent', $edited->id) }}" method="post">
    @method('PUT')
    @csrf
    
    <input type="text" name="name" value="{{ $edited->name }}">
    <br>
    <br>
    <input type="text" name="email" value="{{ $edited->email }}">
    <br>
    <br>
    <input type="text" name="phone" value="{{ $edited->phone }}">
    <br>
    <br>
    
    <a href="{{ route('list') }}" class="btn btn-danger">BACK</a>
    <button type="submit">UPDATE</button>
    
    </form>
</div>
