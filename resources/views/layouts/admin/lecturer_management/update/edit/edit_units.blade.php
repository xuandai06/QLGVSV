<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="{{route('edit/units', $unit)}}" method="post">
                 @csrf
                <input type="text" id="temp_id" name="temp_id" 
                value="{{$unit->id }}" disabled>
                <input type="text" id="name" name="name" value="{{old('name') ?? $unit->name}}">
                @error('name')
                    {{$message}}
                @enderror
                <button type="submit">save</button>
            </form>
           
</body>
</html>
