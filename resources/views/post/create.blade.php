<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INI HALAMAN CREATE</h1>
    <form action="/post" method="POST">
    @csrf
                  <input type="text" name="title"  placeholder="Title">
                  <input type="text" name="body" placeholder="Body">
                  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
