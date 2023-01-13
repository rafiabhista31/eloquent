<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> INI HALAMAN SHOW</h1>
        <form action="/post/{{ $showpostbyid->id }}" method="POST">  
                @csrf
                <label for="inputTitle">Title</label>
                <input type="text" name="title" class="form-control" id="inputTitle"
                value="{{ $showpostbyid->title }}" disabled >
                <label for="inputBody">Body</label>
                <input type="text" name="body" class="form-control" id="inputBody"
                value="{{ $showpostbyid->body }}" disabled >
                <button type="submit">Submit</button>
        </form>
</body>
</html>