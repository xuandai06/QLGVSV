@extends('layouts.menu')

@section('content')
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Tìm kiếm</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{ route('search/scientific_research_management') }}">=> Tìm kiếm loại khoa học</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm cấp thực hiện</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm đề tài giáo trình</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm danh mục tạp trí</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm danh mục hội nghị hội thảo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm danh mục bồi dưỡng</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('search_nckh')
        </div>
    </div>
@endsection