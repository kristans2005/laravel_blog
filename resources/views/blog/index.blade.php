<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>hello</h1>

    <a href="/blog/create"><p>create blog</p></a>

    <div class=" m-5">
        @foreach($blogs as $blog)
        <div class="m-5 bg-gray-300 w-max p-5 rounded-md">
            
            <h2 class=" m-0 font-bold">{{$blog->name}}</h2>
            <p class=" m-0 ">{{$blog->place}}</p>
            <p class=" m-0">{{$blog->date}}</p>
            <form method="POST" action="/blog/{{$blog->id}}">
                @csrf
                @method('DELETE')
                <button type="submit" style="margin: 0;">Delete</button>
            </form>
            <form method="GET" action="/blog/{{$blog->id}}/edit">
                <button type="submit" style="margin: 0;" >edit</button>
            </form>
        
        </div>
        @endforeach
        <br><br><br>
    </div>


    <?php var_dump($blogs) ?>
</body>
</html>