<div>
    <h1>UPLOAD IMAGE</h1>
    <form action="uploadimage" method="post" enctype="multipart/form-data">
        @csrf
    <input type="file" name="file">
    <br><br>
    <button type="submit">UPLOAD</button>
    </form>
</div>
