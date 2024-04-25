<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
</head>
<body>
    <h1>hello</h1>

    <a href="/blog/create"><p>create blog</p></a>

    <div style="margin: 15px;">
    @foreach($blogs as $blog)
        <p style="margin: 0;">{{$blog->id}}</p>
        <h2 style="margin: 0;">{{$blog->name}}</h2>
        <p style="margin: 0;">{{$blog->place}}</p>
        <p style="margin: 0;">{{$blog->date}}</p>
        <form method="POST" action="/blog/{{$blog->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" style="margin: 0;">Delete</button>
        </form>
        <form method="GET" action="/blog/{{$blog->id}}/edit">
            <button type="submit" style="margin: 0;" >edit</button>
        </form>
    <br><br><br>

    @endforeach
    </div>


    <?php var_dump($blogs) ?>
</body>
</html>