@extends('layouts.admin.scientific_research_management_of_lecturers.menu_update')

@section('update_nckh')
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập bài báo</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm bài báo</h1>
                        </div>
                        @if(session('status'))
                        <div class="text-green-500 p-3">
                            {{session('status')}}
                        </div>
                        @endif
                        <form action="{{route('add/articles')}}" method="post" class=" flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã bài báo: </p>
                                    <input type="text" name="id" id="id" placeholder="Nhập vào mã bài báo..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">
                                </div>
                                @error('id')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Tên bài báo: </p>
                                    <input type="text" name="name" id="name" placeholder="Nhập vào tên bài báo ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="">
                                </div>

                                @error('name')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Chi tiết bài báo: </p>
                                    <input type="text" name="detail" id="detail" placeholder="Nhập vào chi tiết bài báo ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('detail') border-red-500 @enderror" value="">
                                </div>

                                @error('detail')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Thời gian: </p>
                                    <input type="date" name="time" id="time" placeholder="Nhập vào chi tiết bài báo ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('time') border-red-500 @enderror" value="">
                                </div>

                                @error('time')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
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
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã tạp chí: </p>
                                    <input type="text" name="journal_id" id="journal_id" placeholder="Nhập vào mã tạp trí..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('journal_id') border-red-500 @enderror" value="">
                                </div>
                                @error('journal_id')
                                <div class="text-red-500 mt-2 pl-44 text-sm">
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
                        <h1 class="">Danh sách bài báo</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="{{route('search/articles')}}" method="post">
                            @csrf
                            <label for="id" class="ml-2">Tìm kiếm</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã bài báo</th>
                                <th class="w-4/12 border-collapse border border-gray-500 p-2">Tên bài báo</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Chi tiết</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Thời gian</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã tạp trí</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2 text-center">{{$article->id}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$article->name}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$article->detail}}</td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">{{$article->time}}</td>
                                <td class="border-collapse border border-gray-500 p-2">{{$article->note}}</td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">{{$article->journal_id}}</td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">
                                    <a href="{{route('edit/articles/index',$article->id )}}" class="hover:text-yellow-500">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">
                                    <form action="{{route('delete/articles',$article->id)}}" method="post">
                                        @csrf
                                        <button class="hover:text-red-500">Delete</button>
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