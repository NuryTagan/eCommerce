<div>
    <h1>Adding Student</h1>

    <form action="add" method="post">
        @csrf
    <input type="text" name="username" placeholder="enter username">
        <br>
        <br>
    <input type="email" name="email" placeholder="enter email">
        <br>
        <br>
    <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>ENTER</button>
    </form>
</div>
