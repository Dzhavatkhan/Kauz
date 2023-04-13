<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="{{route('registr')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    @error('email')
    <div class="alert alert-danger">
        {{$message}}
     </div> 
    @enderror
    <div class="mb-3">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
    @error('name')
    <div class="alert alert-danger">
        {{$message}}
     </div> 
    @enderror
    <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      @error('password')
      <div class="alert alert-danger">
        {{$message}}
     </div> 
      @enderror
    <div class="mb-3">
        <label for="pwd">Password confirm:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_confirmation">
      </div>
      <div class="mb-3">
        <label for="pwd">Avatar:</label>
        <input type="file" class="form-control" id="pwd" name="file">
      </div>
      @error('password_confirmation')
      <div class="alert alert-danger">
        {{$message}}
     </div> 
      @enderror
    <button type="submit" class="btn btn-primary">Отправить</button>
    <div class="mb-3 mt-3">
      <a href="{{route('auth')}}">У меня есть аккаунт</a>
    </div>


  </form>
</div>


</body>
</html>
