@extends('layouts.menu')

@section('content')
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Thống kê</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng đề tài, báo cáo, giáo trình theo cấp thực hiện, loại khoa học</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng đề tài, báo cáo, giáo trình theo từng GV là chủ nhiệm/ chủ biên</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng hội thảo hội nghị theo thời gian, khoảng thời gian</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng NCKH từng loại theo năm</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng bài báo theo từng tạp chí</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Số lượng các bồi dưỡng của GV theo năm</a>
                        </li>

                    </ul>
                </div>
            </div>

            @yield('statistical_nckh')
        </div>
    </div>
@endsection