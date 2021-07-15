@extends('layouts.admin.scientific_research_management_of_lecturers.menu_update')

@section('update_nckh')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập loại khoa học</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm loại khoa học</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('add/kind_of_sciences')}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã khoa học: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã loại khoa học..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">
                                </div>
                                @error('id')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã giảng viên: </p>
                                    <input type="text" name="id_gv" id="id_gv" placeholder="Nhập mã giảng viên ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id_gv') border-red-500 @enderror" value="">
                                </div>

                                @error('id_gv')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Lưu</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="p-6 mb-2 w-full flex-col border-t-2 border-gray-400">
                    <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                        <h1 class="">Danh sách loại khoa học</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="{{route('search/kind_of_sciences')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-5/12 border-collapse border border-gray-500 p-2">Mã khoa học</th>
                                <th class="w-full border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection