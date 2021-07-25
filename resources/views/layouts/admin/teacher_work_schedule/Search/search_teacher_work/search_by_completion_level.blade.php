@extends('layouts.admin.teacher_work_schedule.search.menu_search')

@section('search_work')
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm theo mức độ hoàn thành</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="{{route('search/by_completion_level')}}" class="w-6/12 flex justify-between">

                <p class="text-gray-700">Lựa chọn mức độ hoàn thành</p>
                <select id="search_type" name="search_type" class="form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                    <option>Chưa thực hiện</option>
                    <option>Đang thực hiện</option>
                    <option>Hoàn thành</option>
                </select>
                
                <button type="submit" class="bg-blue-500 text-white rounded px-4 font-medium">Search</button>
            </form>
        </div>

        <div class="w-full flex-col border-t-2 border-gray-400">
            <div class="text-gray-700 text-2xl font-black m-4 mb-6 flex justify-center">
                <h1 class="">Kết quả tìm kiếm</h1>
            </div>
            <table class="bg-white table-fixed flex-col justify-center">
                <thead>
                    <tr>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã công việc</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên công việc</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian bắt đầu</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Thời gian kết thúc</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa điểm</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú công việc</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Trạng thái</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú kết quả</th>
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
                        <td class="border-collapse border border-gray-500 p-2">{{$work->result->status}}</td>
                        <td class="border-collapse border border-gray-500 p-2">{{$work->result->note}}</td>
                    </tr>
                    @endforeach
                </tbody>
                {{$works->links()}}
            </table>
        </div>
    </div>
</div>
@endsection