<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create blog</title>
</head>
<body>
    
@if ($errors->any())
    <ul style="position: fixed; top:20px; left: 20px" class="alert alert-danger">
      @foreach ($errors->all() as $err)
          <li>{{ $err }}</li>
      @endforeach
    </ul>
  @endif

    <h1>Create Blog</h1>
    <form method="POST" action="/blog" enctype="multipart/form-data">
    @csrf
        <label>
            blog name:
            <input name="name" type="text" placeholder="name">
        </label>
        <label>
            place:
            <input name="place" type="text" placeholder="place">
        </label>
        <label>
            date:
            <input name="date" type="date">
        </label>
        <button>Create</button>
    </form>

</body>
</html>