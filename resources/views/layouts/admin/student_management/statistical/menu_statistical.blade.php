@extends('layouts.menu')

@section('content')
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Thống kê báo cáo</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê số lượng sinh viên của khoa, ngành, khóa, lớp</a>
                        </li>
                  
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê số lượng SV nội trú, ngoại trú của khoa, ngành, lớp</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê số lượng SV được hưởng chính sách theo từng loại</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê số lượng SV đạt học bổng, bị kỷ luật của khoa, ngành, lớp theo năm</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê số lượng SV tốt nghiệp, thôi học của khoa, ngành, lớp theo năm</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Thống kê điểm học tập, rèn luyện của khoa, ngành, lớp theo từng loại điểm, theo từng năm</a>
                        </li>

                    </ul>
                </div>
            </div>

            @yield('statistical')
        </div>
    </div>
@endsection