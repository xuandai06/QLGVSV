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
                            <h1 class="">Sửa thông tin sinh viên</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã SV: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã sinh viên ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" disabled value="{{old('id')}}">
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

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Họ tên bố: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập họ tên ..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Nghề nghiệp bố: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập nghề nghiệp ..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Họ tên mẹ: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập họ tên ..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Nghề nghiệp mẹ: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập nghề nghiệp ..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="name" id="name" placeholder="..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã chức vụ: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập mã chức vụ..." class="bg-white w-8/12 p-4 rounded-lg
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
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã lớp: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập mã lớp..." class="bg-white w-8/12 p-4 rounded-lg
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
               
            </div>
        </div>
    </div>
</div>
@endsection