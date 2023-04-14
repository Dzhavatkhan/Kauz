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

  <div class="container">
    <div class="row">
      <div class="card" style="width:400px">
        <img src="{{$profile->image}}" class="card-img-top"  alt="Card image" >
        
        
        
        <div class="card-body">
          <h4 class="card-title">{{$profile->name}}</h4>
          <p class="card-text">Some example text.</p>
          <a href="{{route('addVideo')}}" class="btn btn-primary">+</a>

          <a href="" data-bs-toggle="modal" data-bs-target="#myModal">Update</a>
          <a href="{{route('videos')}}">Home</a>

          <a href="{{route('logout')}}">Back</a>
        </div>
      </div>
    </div>
    <div class="row">


      <div class="mt-3">
        @if ($my_videos == null)
            <h2>U don't have video</h2>
            <p>{{$my_videos}}</p>
        @else
          @foreach ($my_videos as $my_video)
            <div class="video danger">
                {{$my_video}}
            </div>
          @endforeach
        @endif

      </div>
    </div>
  </div>
    

  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Редактировать профиль</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <div class="mb-3">
            <input class="form-control" type="text" value="{{$profile->name}}">
          </div>
          <div class="mb-3">
            <input class="form-control" type="text">
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Send</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </form>
  
      </div>
    </div>
  </div>



</body>
</html>