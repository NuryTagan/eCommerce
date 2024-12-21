<div>
    <h1>
        ADDING PLACE
    </h1>
    <form action="addteacher" method="post">
        @csrf

        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter your email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter your phone number">
        <br>
        <br>

        <button>ADD</button>

        
    </form>

    <form action="list" method="get">
        <button>ALL DATA</button>
    </form>
</div>
