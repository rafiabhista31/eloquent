<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini HALAMAN EDIT</h1>
    <form action="/post/{{ $showpostbyid->id }}" method="POST"> 
                @csrf
                @method('PUT')
                <input type="text"name="title" placeholder="Title"
                value="{{ $showpostbyid->title }}">
                <input type="text" name="body" placeholder="Body"
                value="{{ $showpostbyid->body }}">
                <button type="submit">Submit</button>
    </form>
</body>
</html>