@extends('layouts.admin.scientific_research_management_of_lecturers.menu_update')

@section('update_nckh')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập danh mục bôi dưỡng</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Cập nhập danh mục bồi dưỡng</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{ route('add/extra_trainings') }}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã giảng viên: </p>
                                    <?php

                                    use App\Models\Lecturer;

                                    $lecturers = Lecturer::all();
                                    ?>

                                    <select name="lecturer_id" id="lecturer_id" class="bg-white w-8/12 p-4 rounded-lg
                                    border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        @foreach($lecturers as $lecturer)

                                        @if(session('lecturer') == $lecturer->id)
                                        <option selected value="{{$lecturer->id}}">{{$lecturer->id}}</option>
                                        @else
                                        <option value="{{$lecturer->id}}">{{$lecturer->id}}</option>
                                        @endif

                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã bồi dưỡng: </p>
                                    <input type="text" name="id" id="id_tranings" placeholder="Nhập vào mã bồi dưỡng ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">
                                </div>
                                @error('id')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Nội dung bồi dưỡng: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào nội dung bồi dưỡng ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="">
                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Chuyên môn: </p>
                                    <input type="text" name="specialization" id="specialization" placeholder="Nhập vào chuyên môn ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('specialization') border-red-500 @enderror" value="">
                                </div>

                                @error('specialization')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Nơi đào tạo: </p>
                                    <input type="text" name="place" id="place" placeholder="Nhập vào nơi đào tạo ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('place') border-red-500 @enderror" value="">
                                </div>

                                @error('place')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Thời gian bắt đầu: </p>
                                    <input type="date" name="start_time" id="start_time" placeholder="Nhập vào ghi chú ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('start_time') border-red-500 @enderror" value="">
                                </div>

                                @error('start_time')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Thời gian kết thúc: </p>
                                    <input type="date" name="end_time" id="end_time" placeholder="Nhập vào ghi chú ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('end_time') border-red-500 @enderror" value="">
                                </div>

                                @error('end_time')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Kết quả: </p>
                                    <input type="text" name="result" id="result" placeholder="Nhập vào kết quả ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('result') border-red-500 @enderror" value="">
                                </div>
                                @error('result')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="note" id="note" placeholder="Nhập vào ghi chú ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('note') border-red-500 @enderror" value="">
                                </div>

                                @error('note')
                                <div class="text-red-500 mt-2 pl-64 text-sm">
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
                        <h1 class="">Danh sách hội nghị hội thảo</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="{{route('search/extra_trainings')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center text-xs">
                        <thead>
                            <tr>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã bồi dưỡng</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Nội dung</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Địa điểm</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Chuyên môn</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian bắt đầu</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian kết thúc</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Kết quả</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($extra_trainings as $extra_training)
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->lecturer_id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->name}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->place}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->specialization}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->start_time}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->end_time}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->result}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$extra_training->note}}</td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <a href="{{route('edit/extra_trainings/index',['id' => $extra_training->id
                                        , 'lecturer_id' => $extra_training->lecturer_id])}}">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <form action="{{route('delete/extra_trainings',['id' => $extra_training->id
                                        , 'lecturer_id' => $extra_training->lecturer_id])}}" method="post">
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