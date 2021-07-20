@extends('layouts.menu')

@section('content')
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Tìm kiếm</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=>Tìm kiếm và xuất file theo giảng viên trong khoảng thời gian</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm và xuất file theo tên công việc trong khoảng thời gian</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm và xuất file theo đơn vị trong khoảng thời gian</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Tìm kiếm và xuất theo thời gian bắt đầu </a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=>Tìm kiếm và xuất file theo mức độ hoàn thành trong thời gian</a>
                        </li>

                    </ul>
                </div>
            </div>

            @yield('search_work')
        </div>
    </div>
@endsection