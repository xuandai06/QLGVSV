<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{route('edit/lecturers', $lecturer)}}" method="post">
        @csrf
        <input type="text" id="id" name="id" value="{{$lecturer->id }}" disabled>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{old('name') ?? $lecturer->name}}">
        @error('name')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{old('email') ?? $lecturer->user->email}}">
        @error('email')
        <div>
            {{$message}}
        </div>
        @enderror

        <select name="sex" id="sex">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
        </select>

        <label for="birthday">Birthday</label>
        <input type="date" id="birthday" name="birthday" value="{{old('birthday') ?? $lecturer->birthday}}">
        @error('birthday')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="hometown">Hometown</label>
        <input type="text" id="hometown" name="hometown" value="{{old('hometown') ?? $lecturer->hometown}}">
        @error('hometown')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="{{old('address') ?? $lecturer->address}}">
        @error('address')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="Phone_number">Phone number</label>
        <input type="text" id="phone_number" name="phone_number" value="{{old('phone_number') ?? $lecturer->phone_number}}">
        @error('phone_number')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="note">Address</label>
        <input type="text" id="note" name="note" value="{{old('note') ?? $lecturer->note}}">
        @error('note')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="position_id">Address</label>
        <input type="text" id="position_id" name="position_id" value="{{old('position_id') ?? $lecturer->position_id}}">
        @error('position_id')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="level_id">Level</label>
        <input type="text" id="level_id" name="level_id" value="{{old('level_id') ?? $lecturer->level_id}}">
        @error('level_id')
        <div>
            {{$message}}
        </div>
        @enderror

        <label for="major_id">Major</label>
        <input type="text" id="major_id" name="major_id" value="{{old('major_id') ?? $lecturer->major_id}}">
        @error('major_id')
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