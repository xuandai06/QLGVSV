@extends('layouts.menu')

@section('content')
    <div class="p-3 flex justify-between ">
        <div class="w-4/12 bg-white p-2 border-double border-4 border-blue-300 rounded-lg flex justify-center">
            <div class="p-2 w-10/12 pt-24">
                <div class="text-blue-300 text-4xl font-black mb-6 flex justify-center">
                    <h1 class="">Đăng nhập</h1>
                </div>
                <div class="flex justify-between">
                    
                    <form action=" {{route('login')}}" method="post" class="w-full">
                        @csrf   

                        @if(session('status'))
                                <div class="text-red-500">
                                    {{session('status')}}
                                </div>
                        @endif

                        <div class="mb-4">
                                <input type="text" name="email" id="email" placeholder="Nhập vào gmail..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('ma') border-red-500 @enderror" value="{{ old('gmail') }}">

                                @error('ma')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="mb-4">
                                <input type="password" name="password" id="password" placeholder="Nhập vào mật khẩu ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('password') border-red-500 @enderror" value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        <!--{{ $message }}-->
                                        Mật khẩu từ 6 ký tự trở lên!
                                    </div>
                                @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="w-8/12 bg-white p-2 flex justify-between">
            <div class="w-11/12 flex-col">
                <div class="flex justify-center">
                    <img src="/images/bg_login.jpg" alt="BG-login">
                </div>

                <div class="text-blue-300 text-4xl font-black flex justify-center">
                    <h1 class="">Quản lý giảng viên - sinh viên</h1>
                </div>
            </div>
        </div>
    </div>
@endsection