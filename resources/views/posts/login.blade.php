@extends('layouts.menu')

@section('content')
    <div class="p-3 flex justify-between ">
        <div class="w-4/12 bg-white p-2 border-double border-4 border-gray-400 rounded-lg flex justify-center">
            <div class="p-2 w-10/12">
                <div class="text-blue-300 text-4xl font-black mb-6 flex justify-center">
                    <h1 class="">Login</h1>
                </div>
                <div class="flex justify-between">
                    <form action="" class="w-full">
                        @csrf   
                        <div class="mb-4">
                                <input type="text" name="ma" id="ma" placeholder="Enter the your code ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('ma') border-red-500 @enderror" value="{{ old('ma') }}">

                                @error('ma')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="mb-4">
                                <input type="password" name="password" id="password" placeholder="Choose a password ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                @error('password') border-red-500 @enderror" value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="w-8/12 bg-yellow-300 p-2 flex justify-between">
            hello
        </div>
    </div>
@endsection