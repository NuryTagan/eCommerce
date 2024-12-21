<div>
    <h1>User From</h1>

    <form action="user" method="post">
        @csrf
        {{-- @method('PUT') --}}
        <input type="text" name="user" placeholder="Enter your name">
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter your password">
        <br>
        <br>
        <button>ENTER</button>

    </form>
</div>
