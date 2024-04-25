<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>edit</h1>
    <p>{{$blogs->id}}</p>

    @if ($errors->any())
    <ul style="position: fixed; top:20px; left: 20px" class="alert alert-danger">
      @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
      @endforeach
    </ul>
    @endif

    <div>
        <form method="POST" action="/blog/{{$blogs->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <label>
                name: 
                <input name="name" style="width: 200px; height: 40px; " type="text" value="{{$blogs->name}}">
            </label>
            <label>
                place: 
                <input name="place" type="text" value="{{$blogs->place}}">
            </label>
            <label>
                date: 
                <input name="date" type="date" value="{{$blogs->date}}">
            </label>

            <button>save changes</button>
        </form>
    </div>
</body>
</html>