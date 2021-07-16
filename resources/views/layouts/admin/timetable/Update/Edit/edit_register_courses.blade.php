@extends('layouts.admin.timetable.menu_update')

@section('update_lecturer')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về đăng ký học phần</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Sửa thông tin đăng ký học phần</h1>
                        </div>



    <form action="" method="post">
        @csrf

        <label for="name">Mã lớp HP: </label>
        <input type="text" id="id" name="id" disabled class="bg-white p-2 mx-5 font-bold rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"><hr>
        <label for="name">Mã SV: </label>
        <input type="text" id="name" name="name"  class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
        @error('name')
        <div>
            {{$message}}
        </div>
        @enderror
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
    </form>
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