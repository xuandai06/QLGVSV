@extends('layouts.admin.teacher_work_schedule.menu_update')

@section('update_work_info')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về công việc</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm thông tin công việc</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('add/works')}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã công việc: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã công việc..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" 
                                value="{{old('id') ?? session('id')}}">

                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Tên công việc: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào tên công việc ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" 
                                value="{{old('name') ?? session('name')}}">

                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Thời gian bắt đầu: </p>
                                    <input type="datetime-local" name="start_time" id="start_time" placeholder="Nhập vào thời gian ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('start_time') border-red-500 @enderror" 
                                value="{{old('start_time') ?? session('start_time')}}">

                                </div>

                                @error('start_time')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Thời gian kết thúc: </p>

                                    <input type="datetime-local" name="end_time" id="end_time" placeholder="Nhập vào thời gian ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('end_time') border-red-500 @enderror" 
                                value="{{old('end_time') ?? session('end_time')}}">

                                </div>

                                @error('end_time')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Địa điểm: </p>
                                    <input type="text" name="place" id="place" placeholder="Nhập vào địa điểm ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('place') border-red-500 @enderror" 
                                value="{{old('place') ?? session('place')}}">

                                </div>

                                @error('place')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="note" id="note" placeholder="....." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('note') border-red-500 @enderror" 
                                value="{{old('note') ?? session('note')}}">

                                </div>

                                @error('note')
                                <div class="text-red-500 mt-2 pl-56 text-sm">
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
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="{{route('search/works')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                        <h1 class="">Danh sách phân công công việc</h1>
                    </div>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã công việc</th>
                                <th class="w-full border-collapse border border-gray-500 p-2">Tên công việc</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian bắt đầu</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian kết thúc</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa điểm</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($works as $work)
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->name}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->start_time}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->end_time}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->place}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$work->note}}</td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <a href="{{route('edit/works/index', $work->id)}}">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <form action="{{route('delete/works',$work)}}" method="post">
                                        @csrf
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$works->links()}}

                    <table class="bg-white table-fixed flex-col justify-center">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection