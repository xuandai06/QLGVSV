<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</html>

@extends('layouts.admin.lecturer_management.menu_update')

@section('update_lecturer')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về đơn vị</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Sửa thông tin đơn vị</h1>
                        </div>

                        @if($unit->name != "")
                        <form action="{{route('edit/units', $unit)}}" method="post" class="flex justify-between">
                            @csrf
                            <input type="text" id="temp_id" name="temp_id" value="{{$unit->id }}" disabled class="bg-white p-2 font-bold rounded-lg">
                            <input type="text" id="name" name="name" value="{{$unit->name}}" class="bg-white p-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-6 bg-white hover:bg-blue-400 hover:text-white border-2 outline-none">Save</button>
                        </form>

                        @else
                        <form action="{{route('edit/units', $unit)}}" method="post">
                            @csrf
                            <input type="text" id="temp_id" name="temp_id" value="{{$unit->id}}" disabled class="bg-white p-2 font-bold rounded-lg">
                            <input type="text" id="name" name="name" value="{{old('name')}}" class="bg-white p-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <p>Tên không hợp lệ</p>
                            <button type="submit">save</button>
                        </form>
                        @endif
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection