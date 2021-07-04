<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QLGV-SV</title>

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
                <?php if(auth()->user()): ?>
            <ul class="flex items-center">
               
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <a href="" class="p-3 font-bold clear-left"><?php echo e(auth()->user()->id); ?></a>
                </li>

                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                    <a href="<?php echo e(route('logout')); ?>" class="p-3 font-bold clear-left">Đăng xuất</a>
                </li>
                <?php endif; ?>
                <li class="flex items-center rounded-lg duration-300 ease-in-out hover:bg-blue-200 px-2 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    <a href="<?php echo e(route('login')); ?>" class="p-3 font-bold clear-left">Đăng nhập</a>
                </li>
               
            </ul>
        </nav>

        <?php echo $__env->yieldContent('menuadmin'); ?>
        <?php echo $__env->yieldContent('menuteacher'); ?>
        <?php echo $__env->yieldContent('menustudent'); ?>

    </div>

    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH E:\ungDung\laragon\QLGV\QLGVSV\resources\views/layouts/menu.blade.php ENDPATH**/ ?>