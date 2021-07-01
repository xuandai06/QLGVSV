<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hoc</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="w-full bg-gray-200">

    <div>
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <button class="p-3 font-bold clear-left" id="menu">Menu</button>
                </li>
            </ul>

            <ul class="flex items-center">
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <a href="" class="p-3 font-bold clear-left">Hoàng Hiệp</a>
                </li>
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    <a href="<?php echo e(route('login')); ?>" class="p-3 font-bold clear-left">Login</a>
                </li>
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                    <a href="" class="p-3 font-bold clear-left">Logout</a>
                </li>
            </ul>
        </nav>

        <div class="absolute w-2/12 h-screen bg-white hidden flex justify-between px-6 py-3 rounded-lg mt-1" id="dropdown">
            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <a href="<?php echo e(route('home')); ?>" class="clear-left p-2">Home</a>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
                <button class="clear-left p-2" id="teacher">Teacher management</button>
            </div>

            <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropteacher">
                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Add Teacher</a>
                </div>

                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Update Teacher</a>
                </div>

                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Remove Teacher</a>
                </div>
            </div>

            <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                </svg>
                <button class="clear-left p-2" id="student">Student management</button>
            </div>

            <div class="w-full bg-white hidden flex-col justify-between px-6 text-gray-500 rounded-lg mt-1" id="dropstudent">
                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Add Student</a>
                </div>

                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Update Student</a>
                </div>

                <div class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                    </svg>
                    <a href="" class="clear-left p-2">Remove Student</a>
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

                menu.addEventListener('click', () => {
                    dropdown.classList.toggle('hidden')
                    dropdown.classList.toggle('flex')
                })

                teacher.addEventListener('click', () => {
                    dropteacher.classList.toggle('hidden')
                    dropteacher.classList.toggle('flex-col')
                })

                student.addEventListener('click', () => {
                    dropstudent.classList.toggle('hidden')
                    dropstudent.classList.toggle('flex-col')
                })
            })
        </script>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH F:\Tong hop de cuong on tap\hoc_Tailwindcss\qlgvsv\resources\views/layouts/menu.blade.php ENDPATH**/ ?>