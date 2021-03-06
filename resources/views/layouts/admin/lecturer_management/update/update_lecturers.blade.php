@extends('layouts.admin.lecturer_management.menu_update')

@section('update_lecturer')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin cá nhân</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-9/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm thông tin cá nhân</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('add/lecturers')}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã giảng viên: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã giảng viên ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('id')}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 pl-52 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Email: </p>
                                    <input type="text" name="email" id="email" placeholder="Nhập vào gmail ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('email') border-red-500 @enderror" value="{{old('email')}}">
                                </div>

                                @error('email')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Họ tên giảng viên: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào họ tên..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name')}}">
                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
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

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Ngày sinh: </p>
                                    <input type="date" name="birthday" id="birthday" placeholder="Nhập vào ngày sinh ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('birthday') border-red-500 @enderror" value="{{old('birthday')}}">
                                </div>

                                @error('birthday')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Quê quán: </p>
                                    <input type="text" name="hometown" id="hometown" placeholder="Nhập vào quê quán ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('hometown') border-red-500 @enderror" value="{{old('hometown')}}">
                                </div>

                                @error('hometown')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Địa chỉ: </p>
                                    <input type="text" name="address" id="address" placeholder="Nhập vào địa chỉ ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('address') border-red-500 @enderror" value="{{old('address')}}">
                                </div>

                                @error('address')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Số điện thoại: </p>
                                    <input type="text" name="phone_number" id="phone_number" placeholder="Nhập vào số điện thoại ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('phone_number') border-red-500 @enderror" value="{{old('phone_number')}}">
                                </div>

                                @error('phonenumber')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="note" id="note" placeholder="Nhập vào ghi chú ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('note') border-red-500 @enderror" value="{{old('note')}}">
                                </div>

                                @error('note')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã trình độ: </p>
                                    <input type="text" name="level_id" id="level_id" placeholder="Nhập vào mã trình độ ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('level_id') border-red-500 @enderror" value="{{old('level_id')}}">
                                </div>

                                @error('level_id')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã chức vụ: </p>
                                    <input type="text" name="position_id" id="position_id" placeholder="Nhập vào mã chức vụ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('position_id') border-red-500 @enderror" value="{{old('position_id')}}">
                                </div>

                                @error('position_id')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <label for="major_id" class="text-gray-500 text-xl w-5/12 pt-3">Mã ngành: </label>
                                    <input type="text" name="major_id" id="major_id" placeholder="Nhập vào mã ngành ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('major_id') border-red-500 @enderror" value="{{old('major_id')}}">
                                </div>

                                @error('major_id')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <label for="password" class="text-gray-500 text-xl w-5/12 pt-3">Mật khẩu: </label>
                                    <input type="password" name="password" id="password" placeholder="Nhập vào mật khẩu ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('password') border-red-500 @enderror">
                                </div>

                                @error('password')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-2 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Nhập lại mật khẩu: </p>
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Nhập vào lại mật khẩu ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('password_confirmation') border-red-500 @enderror">
                                </div>

                                @error('password_confirmation')
                                <div class="text-red-500 mt-2 pl-52 text-sm">
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
                        <form action="{{route('search/lecturers')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm theo mã giảng viên</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" value="{{old('id')}}" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên giảng viên</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Giới tính</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày sinh</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Quê quán</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa chỉ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Số điện thoại</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã trình độ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã chức vụ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã ngành</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lecturers as $lecturer)
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->name}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->sex}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->birthday}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->hometown}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->address}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->phone_number}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->level_id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->position_id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->major_id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$lecturer->note}}</td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <a href="{{route('edit/lecturers/index', $lecturer->id)}}">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <form action="{{route('delete/lecturers', $lecturer)}}" method="post">
                                        @csrf
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection