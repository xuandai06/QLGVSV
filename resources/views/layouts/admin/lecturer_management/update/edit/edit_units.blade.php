<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
         @if($unit->name != "")
            <form action="{{route('edit/units', $unit)}}" method="post">
            @csrf
                <input style="display: none;" type="text" id="id" name="id"
                value="{{$unit->id }}">
                <input type="text" id="temp_id" name="temp_id" 
                value="{{$unit->id }}" disabled>
                <input type="text" id="name" name="name" value="{{$unit->name}}">
                <button type="submit">save</button>
            </form>
         
         @else
         <form action="{{route('edit/units', $unit)}}" method="post">
         @csrf
            <input style="display: none;" type="text" id="id" name="id"
             value="{{$unit->id}}">
            <input type="text" id="temp_id" name="temp_id" 
            value="{{$unit->id}}" disabled>
            <input type="text" id="name" name="name" value="{{old('name')}}">
            <p>Tên không hợp lệ</p>
            <button type="submit">save</button>
        </form>
         @endif
           
        
    
</body>
</html>
