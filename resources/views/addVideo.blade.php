<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('addVid')}}" method="POST", enctype="multipart/form-data">
        @csrf
        <input type="text" name="video_name">        
        <input type="text" name="video_description">        
        <input type="file" name="video">
                
        <input type="submit">

        @foreach ($tags as $tag)
            <br><br>
            <input type="hidden" name="id" value="{{$tag->id}}">
            <button name="{{$tag->tag}}" >{{$tag->tag}}</button>
        @endforeach
    </form>
</body>
</html>