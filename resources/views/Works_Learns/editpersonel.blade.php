<div>
   <h1>EDIT PERSONELS</h1>

   <form action="{{route('updatepersonel', $editpersonel->id)}}" method="post">
    @method('put')
    @csrf
    
    <input type="text" name="name" value="{{ $editpersonel->name }}">
    <br>
    <br>
    <input type="text" name="surname" value="{{ $editpersonel->surname }}">
    <br>
    <br>
    <input type="text" name="email" value="{{ $editpersonel->email }}">
    <br>
    <br>
    <button type="submit" style="btn btn-dark">UPDATE</button>
    

   </form>
</div>
