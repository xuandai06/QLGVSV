@extends('layouts.admin.lecturer_management.menu_update')

@section('update_lecturer')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>

                <p class="clear-left p-2">Cập nhập thông tin về chức vụ</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-center px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Sửa thông tin chức vụ</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('edit/lecturers', $lecturer)}}" method="post">
                            @csrf
                            <div class="flex justify-between">
                                <label for="name" class="w-3/12">Mã giảng viên:</label>
                                <input disabled type="text" id="id" name="id" value="{{$lecturer->id }}" class="w-6/12 bg-white p-2 mx-2 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            </div>

                            <label for="name">Họ và tên</label>
                            <input type="text" id="name" name="name" value="{{old('name') ?? $lecturer->name}}" class="bg-white p-2 mx-10 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('name')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="{{old('email') ?? $lecturer->user->email}}" class="bg-white p-2 mx-10 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('email')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label>Giới tính</label>
                            <select name="sex" id="sex" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                <hr>

                                @if($lecturer->sex == 'Nam')
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>

                                @elseif($lecturer->sex == 'Nữ')
                                <option value="Nữ">Nữ</option>
                                <option value="Nam">Nam</option>
                                <option value="Khác">Khác</option>
                                @else
                                <option autofocus value="Khác">Khác</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                @endif
                            </select>

                            <label for="birthday">Ngày sinh</label>
                            <input type="date" id="birthday" name="birthday" value="{{old('birthday') ?? $lecturer->birthday}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('birthday')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="hometown">Quê quán</label>
                            <input type="text" id="hometown" name="hometown" value="{{old('hometown') ?? $lecturer->hometown}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('hometown')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="address">Địa chỉ</label>
                            <input type="text" id="address" name="address" value="{{old('address') ?? $lecturer->address}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('address')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="Phone_number">Điện thoại</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{old('phone_number') ?? $lecturer->phone_number}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('phone_number')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="note">Ghi chú</label>
                            <input type="text" id="note" name="note" value="{{old('note') ?? $lecturer->note}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('note')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="position_id">Mã chức vụ</label>
                            <input type="text" id="position_id" name="position_id" value="{{old('position_id') ?? $lecturer->position_id}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('position_id')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="level_id">Trình độ</label>
                            <input type="text" id="level_id" name="level_id" value="{{old('level_id') ?? $lecturer->level_id}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('level_id')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <label for="major_id">Mã ngành</label>
                            <input type="text" id="major_id" name="major_id" value="{{old('major_id') ?? $lecturer->major_id}}" class="bg-white p-2 mx-5 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <hr>
                            @error('major_id')
                            <div>
                                {{$message}}
                            </div>
                            @enderror

                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection