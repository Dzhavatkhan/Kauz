<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
</head>
<body>

    @foreach ($profiles as $profile)
    <div class="card" style="width:400px">
        <img src="{{$profile->image}}" class="card-img-top"  alt="Card image" >
        
        
        
        <div class="card-body">
          <h4 class="card-title">{{$profile->name}}</h4>
          <p class="card-text">Some example text.</p>
          <a href="{{route('addVideo')}}">+</a>




          <a href="{{route('logout')}}">Back</a>
        </div>
      </div>
    @endforeach




</body>
</html>