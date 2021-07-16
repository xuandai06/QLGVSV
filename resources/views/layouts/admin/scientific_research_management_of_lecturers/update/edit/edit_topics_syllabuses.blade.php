@extends('layouts.admin.scientific_research_management_of_lecturers.menu_update')

@section('update_nckh')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin chi tiết về đề tài NCKH/giáo trình</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-full">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm đề tài NCKH/giáo trình</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('edit/topics_syllabuses',$topics_syllabuse)}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Mã loại đề tài/giáo trình: </p>
                                    <input type="text" name="id" id="id" placeholder="Mã loại đề tài/giáo trình..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" disabled value="{{$topics_syllabuse->id }}">
                                </div>
                                @error('id')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Tên đề tài/giáo trình: </p>
                                    <input type="text" name="name" id="name" placeholder="Tên đề tài/giáo trình ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="{{old('name') ?? $topics_syllabuse->name }}">
                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Thời gian: </p>
                                    <input type="date" name="time" id="time" placeholder="Thời gian ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('time') border-red-500 @enderror" value="{{old('time') ?? $topics_syllabuse->time }}">
                                </div>

                                @error('time')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Kết quả: </p>
                                    <input type="text" name="result" id="result" placeholder="Kết quả ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('result') border-red-500 @enderror" value="{{old('result') ?? $topics_syllabuse->result }}">
                                </div>

                                @error('result')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Ghi chú: </p>
                                    <input type="text" name="note" id="note" placeholder="Ghi chú ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('note') border-red-500 @enderror" value="{{old('note') ?? $topics_syllabuse->note }}">
                                </div>

                                @error('note')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Mã loại khoa học: </p>
                                    <input type="text" name="kind_of_science_id" id="kind_of_science_id" placeholder="Nhập vào mã loại khoa học..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('kind_of_science_id') border-red-500 @enderror" value="{{old('kind_of_science_id') ?? $topics_syllabuse->kind_of_science_id }}">
                                </div>
                                @error('kind_of_science_id')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-6/12 pt-3">Mã loại cấp: </p>
                                    <input type="text" name="implementation_id" id="implementation_id" placeholder="Nhập vào mã cấp khoa học..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('implementation_id') border-red-500 @enderror" value="{{old('implementation_id') ?? $topics_syllabuse->implementation_id }}">
                                </div>
                                @error('implementation_id')
                                <div class="text-red-500 mt-2 pl-60 text-sm">
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