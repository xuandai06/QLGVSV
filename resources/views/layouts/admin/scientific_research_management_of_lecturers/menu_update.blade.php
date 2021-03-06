@extends('layouts.menu')

@section('content')
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Cập nhật</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white ">
                            <a href="{{route('update/kind_of_sciences')}}">=> Cập nhật loại khoa học</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/update_implementation_levels')}}">=> Cập nhật cấp thực hiện</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/topics_syllabuses')}}">=> Cập nhật đề tài giáo trình</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/topic_details')}}">=> Cập nhật chi tiết đề tài giáo trình</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/journals')}}">=> Cập nhật danh mục tạp chí</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/articles')}}">=> Cập nhật bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/article_details')}}">=> Cập nhật chi tiết bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/conferences')}}">=> Cập nhật danh mục hội nghị hội thảo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/conferences_details')}}">=> Cập nhật chi tiết hội nghị hội thảo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="{{route('update/extra_trainings')}}">=> Cập nhật danh mục bồi dưỡng</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('update_nckh')
        </div>
    </div>
@endsection