<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('test')}}" method="post">
        @csrf
        <input type="text" id="id" name="id" >
        <input type="text" id="name" name="name">
            @error('name')
                {{$message}}
            @enderror
        <button type="submit">save</button>
    </form>
</body>
</html>
