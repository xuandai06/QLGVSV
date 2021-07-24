@extends('layouts.admin.scientific_research_management_of_lecturers.search.menu')

@section('search_nckh')
<div class="w-full ml-2 flex justify-between mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm theo cấp thực hiện/ loại khoa học</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="{{route('search/details/lecturers')}}" class="w-6/12 flex justify-between">
               
            <div class="flex-col">
                    <label class="flex-col mr-4">
                        <select id="search_type" name="search_type" class="form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Tìm theo cấp thực hiện</option>
                            <option>Tìm theo loại khoa học</option>
                        </select>
                    </label>
                </div>

                <div class="flex-col">
                    <input type="text" id="keyword" name="keyword" class="p-1.5 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập thông tin muốn tìm ...">
                </div>

                <button type="submit" class="bg-blue-500 text-white rounded px-4 font-medium">Search</button>
            </form>
        </div>

        <div class="p-6 mb-2 w-full flex-col border-t-2 border-gray-400">
            <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                <h1 class="">Danh sách loại khoa học</h1>
            </div>
            <table class="bg-white table-fixed flex-col justify-center">
                <thead>
                    <tr>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Cấp thực hiện</th>
                        <th class="w-full border-collapse border border-gray-500 p-2">Loại khoa học</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kind_of_sciences as $kind_of_science)
                    <tr>
                        <td class="border-collapse border border-gray-500 p-2">{{$kind_of_science->id}}</td>
                        <td class="border-collapse border border-gray-500 p-2">{{$kind_of_science->name}}</td>
                        <td class="border-collapse border border-gray-500 p-2">
                            <a href="{{ route('edit/kind_of_sciences/index',$kind_of_science->id) }}">Edit</a>
                        </td>
                        <td class="border-collapse border border-gray-500 p-2">
                            <form action="{{route('delete/kind_of_sciences',$kind_of_science)}}" method="post">
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
@endsection