<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Page</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
    <form action="{{ route('store.contact') }}" method="post">
        @csrf
    <div class="form-floating mb-3">
    <label for="floatingInput">Full Name</label><br>
    <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{old('name')}}" @error('name') is-invalid @enderror">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<label for="floatingInput">Email address</label><br>
<input type="email" class="form-control" placeholder="name@example.com" name="email" value="{{old('email')}}" @error('email') is-invalid @enderror">
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-floating">
<label for="floatingPassword">Password</label>  <br>
<input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}" @error('password') is-invalid @enderror"><br>
  <button type="submit"> Submit</button>
  @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</form>

</body>
</html>