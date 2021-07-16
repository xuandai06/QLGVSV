@extends('layouts.admin.student_management.menu_update')

@section('update_lecturer')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin lý lịch sinh viên</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm thông tin sinh viên</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('add/levels')}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã SV: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã sinh viên ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('id')}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Họ tên sinh viên: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào tên sinh viên ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Giới tính: </p>
                                <select name="sex" id="sex" class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ngày sinh: </p>
                                    <input type="date" name="name" id="name" placeholder="" class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Quê quán: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào quê quán ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Địa chỉ: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào địa chỉ ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Quốc tịch: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào quốc tịch ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Dân tộc: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào dân tộc ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Số CMTND/CCCD: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào CMTND/CCCD ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ngày cấp: </p>
                                    <input type="date" name="name" id="name" placeholder="" class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Nơi cấp: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào nơi cấp ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Số điện thoại SV: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào SĐT ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">SĐT gia đình: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào SĐT ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
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
                        <h1 class="">Danh sách trình độ</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="{{route('search/levels')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm trình độ</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" value="{{old('id')}}">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã trình độ</th>
                                <th class="w-full border-collapse border border-gray-500 p-2">Tên trình độ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection