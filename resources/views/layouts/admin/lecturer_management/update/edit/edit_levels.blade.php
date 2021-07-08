<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('edit/levels', $level)}}" method="post">
        @csrf
        <input type="text" id="id" name="id" value="{{$level->id }}" disabled>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{old('name') ?? $level->name}}">
        @error('name')
        <div>
            {{$message}}
        </div>
        @enderror
        <button type="submit">save</button>
    </form>
    @if(session('status'))
    <div class="text-red-500">
        {{session('status')}}
    </div>
    @endif


</body>

</html>