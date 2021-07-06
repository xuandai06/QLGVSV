<form action="{{route('edit/units', $unit)}}" method="post">
    @csrf
    <input style="display: none;" type="text" id="id" name="id" value="{{$unit->id}}">
    <input type="text" id="temp_id" name="temp_id" value="{{$unit->id}}" disabled>
    <input type="text" id="name" name="name" value="{{$unit->name}}">
    <button type="submit">save</button>
</form>