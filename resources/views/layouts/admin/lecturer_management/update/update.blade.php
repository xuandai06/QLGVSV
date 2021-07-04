@extends('layouts.admin.menu')

@section('admin')
<div class="flex justify-center pt-6">
    <div class="w-11/12 bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2" id="unit">Cập nhập thông tin về đơn vị</button>
            </div>

            <div class="w-full bg-gray-200 hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropunit">
                <div class="w-full p-2 rounded-lg flex justify-center">
                    <div class="p-2 w-10/12 p-6">
                        <form action="{{route('add/unit')}}" method="post" class="w-10/12 flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Mã đơn vị: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã đơn vị..." class="bg-white w-full p-4 rounded-lg
<<<<<<< Updated upstream
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">
=======
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id_unit') border-red-500 @enderror" value="">
>>>>>>> Stashed changes

                                @error('id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex">
<<<<<<< Updated upstream
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Tên đơn vị: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào tên đơn vị ..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="">
=======
                            <p class="text-gray-500 text-xl w-2/12 pt-3">Tên đơn vị: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào tên đơn vị ..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('password') border-red-500 @enderror" value="">
>>>>>>> Stashed changes

                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Cập nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2" id="subjects">Cập nhật thông tin về bộ môn</button>
            </div>

            <div class="w-full bg-gray-200 hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropsubjects">
                <div class="w-full p-2 rounded-lg flex justify-center">
                    <div class="p-2 w-10/12 p-6">
                        <form action="" method="" class="w-10/12 flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Mã bộ môn: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã bộ môn..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">

                                @error('id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Tên bộ môn: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào tên bộ môn ..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="">

                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Mã đơn vị: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã đơn vị..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">

                                @error('id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Cập nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2" id="majors">Cập nhật thông tin về ngành</button>
            </div>

            <div class="w-full bg-gray-200 hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropmajors">
                <div class="w-full p-2 rounded-lg flex justify-center">
                    <div class="p-2 w-10/12 p-6">
                        <form action="" method="" class="w-10/12 flex-col justify-center">
                            @csrf

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Mã ngành: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã ngành..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">

                                @error('id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Tên ngành: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào tên ngành ..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('name') border-red-500 @enderror" value="">

                                @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-2/12 pt-3">Mã bộ môn: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã bộ môn..." class="bg-white w-full p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent @error('id') border-red-500 @enderror" value="">

                                @error('id')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Cập nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2">Cập nhật thông tin về chức vụ</button>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2">Cập nhật thông tin về trình độ</button>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <button class="clear-left p-2">Cập nhật thông tin về hồ sơ cá nhân giảng viên</button>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const unit = document.querySelector('#unit')
            const dropunit = document.querySelector('#dropunit')
            const subjects = document.querySelector('#subjects')
            const dropsubjects = document.querySelector('#dropsubjects')

            unit.addEventListener('click', () => {
                dropunit.classList.toggle('hidden')
                dropunit.classList.toggle('flex')

                if (dropsubjects.classList.contains('hidden') == false) {
                    dropsubjects.classList.toggle('hidden')
                };
            })

            subjects.addEventListener('click', () => {
                dropsubjects.classList.toggle('hidden')
                dropsubjects.classList.toggle('flex')

                if (dropunit.classList.contains('hidden') == false) {
                    dropunit.classList.add('hidden');
                };
            })

        })
    </script>
</div>
@endsection