<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLGV-SV</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="w-full bg-gray-200 font-sans">

    <div>
        <nav class="p-3 bg-white flex justify-between border-b-2 border-gray-500">

            <ul class="flex items-center pl-4">
                <li class="flex items-center rounded-lg">
                    <ul class="flex items-center">
                        <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <a href="{{ route('admin') }}" class="clear-left p-2 font-bold">Trang chủ</a>
                        </li>
                        @if(auth()->user())
                        <li class="group">
                            <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">Quản lý giảng viên</a>
                            </div>

                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                                group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="{{route('update/units')}}" class="clear-left p-2">Cập nhật giảng viên</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="{{route('search/index/details/lecturers')}}" class="clear-left p-2">Tìm kiếm giảng viên</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="{{route('statistic/lecturers')}}" class="clear-left p-2">Thống kê giảng viên</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="group">
                            <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">Quản lý sinh viên</a>
                            </div>
                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Cập nhật sinh viên</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Tìm kiếm sinh viên</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Thống kê sinh viên</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="group">
                        <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">Quản lý NCKH-GV</a>
                            </div>
                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="{{ route('update/kind_of_sciences') }}" class="clear-left p-2">Cập nhật</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Tìm kiếm</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Thống kê</a>
                                    </li>
                                </ul>
                            </div>

                        </li>

                        <li class="group">
                        <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">Quản lý NCKH-SV</a>
                            </div>
                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Cập nhật</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Tìm kiếm</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Thống kê</a>
                                    </li>
                                </ul>
                            </div>

                        </li>

                        <li class="group">
                        <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">Lịch công tác GV</a>
                            </div>
                            
                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
<<<<<<< HEAD
                                        <a href="" class="clear-left p-2">Cập nhật</a>
=======
                                        <a href="{{route('update/works')}}" class="clear-left p-2">Cập nhập</a>
>>>>>>> 960c3bc2469103bb59730c0b203e682b2bbacb4f
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Tìm kiếm</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Nhắc việc</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Thống kê</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="group">
                        <div class="rounded-lg duration-300 ease-in-out px-2 group-hover:bg-blue-200 group-hover:text-white p-3 font-bold">
                                <a href="" id="teacher">TKB-SV</a>
                            </div>
                            
                            <div class="absolute bg-white py-5 rounded-lg border-2 border-blue-100 opacity-0 invisible
                            group-hover:opacity-100 group-hover:visible">
                                <ul class="mx-6">
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Cập nhật</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Tìm kiếm</a>
                                    </li>
                                    <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <a href="" class="clear-left p-2">Thống kê</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>

            <ul class="flex items-center">
                @if(auth()->user())
                <li class="flex items-center rounded-lg">
                    <a href="" class="p-3 font-bold clear-left">{{auth()->user()->id}}</a>
                </li>

                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                    <a href="{{ route('logout')}}" class="p-3 font-bold clear-left">Đăng xuất</a>
                </li>
                @endif

                @if(!Auth::check())
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    <a href="{{ route('login') }}" class="p-3 font-bold clear-left">Đăng nhập</a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
    @yield('content')
</body>

</html>