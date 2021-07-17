@extends('layouts.admin.lecturer_management.menu_update')

@section('update_lecturer')
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
                            <h1 class="">Sửa thông tin công việc</h1>
                        </div>

                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        
                        <form action="{{route('edit/works', $work)}}" method="post">
                            @csrf

                            <label for="id">Mã công việc</label>
                            <input type="text" id="id" name="id" value="{{$work->id}}" disabled class="bg-white p-2 mx-5 font-bold rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">

<<<<<<< HEAD
                            <hr>
                            <label for="name">Tên công việc</label>
                            <input type="text" id="name" name="name" value="{{old('name') ?? $work->name}}" class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            @error('name')
                            <div>
                                {{$message}}
                            </div>
                            @enderror
                            <label for="start_time">Thời gian bắt đầu</label>

                            <input type="datetime-local" id="start_time" name="start_time" value="<?php echo  date('Y-m-d\TH:i', strtotime($work->start_time) )?>" class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            
                            @error('start_time')
                            <div>
                                {{$message}}
                            </div>
                            @enderror
                            <label for="end_time">Thời gian kết thúc</label>
                                <input type="datetime-local" id="end_time" name="end_time" value="<?php echo  date('Y-m-d\TH:i', strtotime($work->end_time) )?>" class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                @error('end_time')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                                <label for="place">Địa điểm</label>
                                <input type="text" id="place" name="place" value="{{old('place') ?? $work->place}}" class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                @error('place')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                                <label for="note">Ghi chú</label>
                                <input type="text" id="note" name="note" value="{{old('note') ?? $work->note}}" class="bg-white p-4 py-2 mx-4 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                @error('note')
                                <div>
                                    {{$message}}
                                </div>
                                @enderror
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
                        </form>
=======
    <form action="{{route('edit/positions', $position)}}" method="post">
        @csrf

        <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã công việc: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã công việc ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Tên công việc </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã đơn vị ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Thời gian bắt đầu: </p>
                                    <input type="date" name="id" id="id" placeholder="" class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Thời gian kết thúc: </p>
                                    <input type="date" name="id" id="id" placeholder="" class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Địa điểm: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập địa điểm ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="id" id="id" placeholder="..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="{{old('name') ?? $position->name}}">
                                </div>

                                @error('id')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
    </form>
    @if(session('status'))
    <div class="text-green-500 p-3">
        {{session('status')}}
    </div>
    @endif
>>>>>>> f0c78197a803f551a4397965d0c3056aab3a106c

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection