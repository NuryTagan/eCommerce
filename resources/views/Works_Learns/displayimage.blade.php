<div>
    <h1>
        IMAGES
    </h1>

    @foreach ($imglist as $img)
        <img style="width: 200px; margin: 20px" src="{{url('storage/'.$img->path)}}">
    @endforeach
</div>
