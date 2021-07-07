<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('edit/subjects', $subject)}}" method="post">
        @csrf
        <input type="text" id="temp_id" name="temp_id" value="{{$subject->id }}" disabled>
        <label for="unit_id">Unit id</label>
        <input type="text" id="unit_id" name="unit_id" value="{{old('unit_id') ?? $subject->unit_id}}">
        @error('unit_id')
        <div>
            {{$message}}
        </div>
        @enderror
        @if(session('status'))
        <div class="text-red-500">
            {{session('status')}}
        </div>
        @endif
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{old('name') ?? $subject->name}}">
        @error('name')
        <div>
            {{$message}}
        </div>
        @enderror
        <button type="submit">save</button>
    </form>


</body>

</html>