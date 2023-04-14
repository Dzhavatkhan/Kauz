<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>{{$video->video_name}}</h2>
<video width="412" height="209" controls="controls" poster="video/duel.jpg">
    <source src="{{$video->video}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
  </video>
</body>
</html>