<div>
    <h1>
        ADDING NEW PERSONEL
    </h1>
    <form action="addpersonel" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
        <span style="color: red">
        @error('name')
            {{$message}}
        @enderror
        </span>
        <br>
        <br>
        <input type="text" name="surname" placeholder="Enter your surname" value="{{old('surname')}}">
        <span style="color: red">
        @error('surname')
            {{$message}}
        @enderror
        </span>
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
        <span style="color: red">
        @error('email')
            {{$message}}
        @enderror
        </span>
        <br>
        <br>
        <button type="submit">ADD</button>

    </form>

    <form action="listpersonel" method="get">
        <button type="submit">LIST OF PERSONELS</button>
    </form>
</div>
