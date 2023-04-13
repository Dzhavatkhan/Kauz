<!DOCTYPE html>
<html lang="en">
<head>
  <title>Авторизация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Авторизация</h2>
  <form action="{{route('login_process')}}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Эл. почта:</label>
      <input type="email" class="form-control" id="email" placeholder="Введите эл. почту" name="email">
    </div>
    @error('email')
    <div class="alert alert-danger">
        {{$message}}
     </div> 
     @enderror
    <div class="mb-3">
      <label for="pwd">Пароль:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Введите пароль" name="password">
    </div>
    @error('password')
    <div class="alert alert-danger">
      {{$message}}
   </div> 
    @enderror
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Запомнить меня
      </label>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" >Войти</button>
    </div>

    <div class="mb-3">
        <a href="{{route('registration')}}">У меня нет аккаунта</a>
    </div>
    <div class="mb-3">
        <a  href="{{route('videos')}}">Назад</a>
    </div>

  </form>
</div>

</body>
</html>