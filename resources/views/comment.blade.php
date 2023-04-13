
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-4">
    <div class="row">
        <div class="card">
            <div class="card-title">Комментарий</div>
            <div class="card-body">{{$comment->comment}}</div>
            <a href="{{route('comments.index')}}">Back</a>
        </div>
    </div>

</div>
