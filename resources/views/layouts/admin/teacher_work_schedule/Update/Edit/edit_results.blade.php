@extends('layouts.admin.teacher_work_schedule.menu_update')

@section('update_work_info')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về phân công công việc</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Sửa thông tin phân công công việc</h1>
                        </div>

                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif

                        <form action="{{route('edit/results', $result)}}" method="post">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Mã công việc: </p>
                                    <input type="text" name="work_id" id="work_id" placeholder="Nhập vào mã công việc ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('work_id') border-red-500 @enderror" value="{{$result->work_id}}" disabled>
                                </div>
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                <p class="text-gray-500 text-xl w-4/12 pt-3">Trạng thái: </p>
                                <select name="status" id="status">

                                    @if($result->status == 'Chưa thực hiện')
                                    <option>Chưa thực hiện</option>
                                    <option>Đang thực hiện</option>
                                    <option>Hoàn thành</option>
                                    @elseif($result->status == 'Đang thực hiện')
                                    <option>Đang thực hiện</option>
                                    <option>Chưa thực hiện</option>
                                    <option>Hoàn thành</option>
                                    @else
                                    <option>Hoàn thành</option>
                                    <option>Đang thực hiện</option>
                                    <option>Chưa thực hiện</option>
                                    @endif
                                    
                                </select>
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-4/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="note" id="note" placeholder="Nhập ghi chú ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('note') border-red-500 @enderror" value="{{old('note') ?? $result->note}}">
                                </div>

                                @error('note')
                                <div class="text-red-500 mt-2 pl-40 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection