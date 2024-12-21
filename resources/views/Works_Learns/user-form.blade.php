
<div>
    <h1>
        User Form
    </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
    <form action="adduser" method="post">
    @csrf
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Enter username</span>
        <input type="text" class="form-control" aria-label="Sizing example input" 
          aria-describedby="inputGroup-sizing-sm" name="username" value="{{ old('username') }}" 
          class="{{ $errors->first('username')? 'input-error' : ' ' }}">

        <span style="color: red">@error('username') {{ $message }} @enderror</span>
      </div>

      @include('about')

      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Enter city</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="city" 
        value="{{ old('city') }}" class="{{ $errors->first('city')? 'input-error' : ' ' }}">
        <span style="color: red">@error('city')
          {{ $message }}
      @enderror</span>
      </div>

 
      
      <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Enter email</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="email" 
        value="{{ old('email') }}" class="{{ $errors->first('email')? 'input-error' : ' ' }}">
        <span style="color: red">@error('email')
          {{ $message }}
      @enderror</span>
      </div>
      
      <div class="input-form">
        <br>
        <button class="btn btn-success">Success</button>
      </div>
      
<br>

      <button type="submit" class="btn btn-dark">Dark</button>
     
      
    </form>

   
