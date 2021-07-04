@extends('layouts.menu')

@section('menuadmin')
    <div class="absolute w-2/12 h-screen bg-white hidden flex justify-between px-6 py-3 rounded-lg mt-1" id="dropdown">
        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <a href="{{ route('admin') }}" class="clear-left p-2">Trang chủ</a>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>
            <button class="clear-left p-2" id="teacher">Quản lý giảng viên</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropteacher">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="{{ route('update_gv') }}" class="clear-left p-2">Cập nhập</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Thống kê</a>
            </div>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>
            <button class="clear-left p-2" id="student">Quản lý sinh viên</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropstudent">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Cập nhật</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Thống kê</a>
            </div>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <button class="clear-left p-2" id="nckh_gv">Quản lý NCKH-GV</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropnckhgv">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Cập nhật</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Thống kê</a>
            </div>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <button class="clear-left p-2" id="nckh_sv">Quản lý NCKH-SV</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropnckhsv">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Cập nhật</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Thống kê</a>
            </div>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <button class="clear-left p-2" id="lich_ct">Lịch công tác GV</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="droplichct">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Cập nhật</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <a href="" class="clear-left p-2">Nhắc việc</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Báo cáo, thống kê</a>
            </div>
        </div>

        <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <button class="clear-left p-2" id="tkb_sv">TKB SV</button>
        </div>

        <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="droptkbsv">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Cập nhật</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <a href="" class="clear-left p-2">Tìm kiếm</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                <a href="" class="clear-left p-2">Nhắc việc</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <a href="" class="clear-left p-2">Báo cáo, thống kê</a>
            </div>
        </div>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const menu = document.querySelector('#menu')
                const dropdown = document.querySelector('#dropdown')
                const teacher = document.querySelector('#teacher')
                const dropteacher = document.querySelector('#dropteacher')
                const student = document.querySelector('#student')
                const droptstudent = document.querySelector('#dropstudent')
                const nckhgv = document.querySelector('#nckh_gv')
                const dropnckhgv = document.querySelector('#dropnckhgv')
                const nckhsv = document.querySelector('#nckh_sv')
                const dropnckhsv = document.querySelector('#dropnckhsv')
                const lichct = document.querySelector('#lich_ct')
                const droplichct = document.querySelector('#droplichct')
                const tkbsv = document.querySelector('#tkb_sv')
                const droptkbsv = document.querySelector('#droptkbsv')

                menu.addEventListener('click', () => {
                    dropdown.classList.toggle('hidden')
                    dropdown.classList.toggle('flex')
                })

                teacher.addEventListener('click', () => {
                    dropteacher.classList.toggle('hidden')
                    dropteacher.classList.toggle('flex-col')

                    if(droptstudent.classList.contains('hidden') == false){
                        droptstudent.classList.add('hidden');
                    };

                    if(dropnckhgv.classList.contains('hidden') == false){
                        dropnckhgv.classList.add('hidden');
                    };

                    if(dropnckhsv.classList.contains('hidden') == false){
                        dropnckhsv.classList.add('hidden');
                    };

                    if(droplichct.classList.contains('hidden') == false){
                        droplichct.classList.add('hidden');
                    };
                })

                student.addEventListener('click', () => {
                    dropstudent.classList.toggle('hidden')
                    dropstudent.classList.toggle('flex-col')

                    if(dropteacher.classList.contains('hidden') == false){
                        dropteacher.classList.add('hidden');
                    };

                    if(dropnckhgv.classList.contains('hidden') == false){
                        dropnckhgv.classList.add('hidden');
                    };

                    if(dropnckhsv.classList.contains('hidden') == false){
                        dropnckhsv.classList.add('hidden');
                    };

                    if(droplichct.classList.contains('hidden') == false){
                        droplichct.classList.add('hidden');
                    };
                    
                    if(droptkbsv.classList.contains('hidden') == false){
                        droptkbsv.classList.add('hidden');
                    };
                })

                nckhgv.addEventListener('click', () => {
                    dropnckhgv.classList.toggle('hidden')
                    dropnckhgv.classList.toggle('flex-col')

                    if(dropteacher.classList.contains('hidden') == false){
                        dropteacher.classList.add('hidden');
                    };

                    if(dropstudent.classList.contains('hidden') == false){
                        dropstudent.classList.add('hidden');
                    };

                    if(dropnckhsv.classList.contains('hidden') == false){
                        dropnckhsv.classList.add('hidden');
                    };

                    if(droplichct.classList.contains('hidden') == false){
                        droplichct.classList.add('hidden');
                    };

                    if(droptkbsv.classList.contains('hidden') == false){
                        droptkbsv.classList.add('hidden');
                    };
                })

                nckhsv.addEventListener('click', () => {
                    dropnckhsv.classList.toggle('hidden')
                    dropnckhsv.classList.toggle('flex-col')

                    if(dropteacher.classList.contains('hidden') == false){
                        dropteacher.classList.add('hidden');
                    };

                    if(dropstudent.classList.contains('hidden') == false){
                        dropstudent.classList.add('hidden');
                    };

                    if(dropnckhgv.classList.contains('hidden') == false){
                        dropnckhgv.classList.add('hidden');
                    };

                    if(droplichct.classList.contains('hidden') == false){
                        droplichct.classList.add('hidden');
                    };

                    if(droptkbsv.classList.contains('hidden') == false){
                        droptkbsv.classList.add('hidden');
                    };
                })

                lichct.addEventListener('click', () => {
                    droplichct.classList.toggle('hidden')
                    droplichct.classList.toggle('flex-col')

                    if(dropteacher.classList.contains('hidden') == false){
                        dropteacher.classList.add('hidden');
                    };

                    if(dropstudent.classList.contains('hidden') == false){
                        dropstudent.classList.add('hidden');
                    };

                    if(dropnckhgv.classList.contains('hidden') == false){
                        dropnckhgv.classList.add('hidden');
                    };

                    if(dropnckhsv.classList.contains('hidden') == false){
                        dropnckhsv.classList.add('hidden');
                    };

                    if(droptkbsv.classList.contains('hidden') == false){
                        droptkbsv.classList.add('hidden');
                    };
                })

                tkbsv.addEventListener('click', () => {
                    droptkbsv.classList.toggle('hidden')
                    droptkbsv.classList.toggle('flex-col')

                    if(dropteacher.classList.contains('hidden') == false){
                        dropteacher.classList.add('hidden');
                    };

                    if(dropstudent.classList.contains('hidden') == false){
                        dropstudent.classList.add('hidden');
                    };

                    if(dropnckhgv.classList.contains('hidden') == false){
                        dropnckhgv.classList.add('hidden');
                    };

                    if(dropnckhsv.classList.contains('hidden') == false){
                        dropnckhsv.classList.add('hidden');
                    };

                    if(droplichct.classList.contains('hidden') == false){
                        droplichct.classList.toggle('hidden')
                    };
                })
            })
        </script>
    </div>
    
    @yield('admin')
@endsection