

<?php $__env->startSection('update_unit'); ?>
<div class="flex justify-center pt-6">
    <div class="w-11/12 bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về đơn vị</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-6/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-4xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm thông tin đơn vị</h1>
                        </div>
                        <form action="<?php echo e(route('add/unit')); ?>" method="post" class=" flex-col justify-center">
                            <?php echo csrf_field(); ?>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-4/12 pt-3">Mã đơn vị: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã đơn vị..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="">


                                <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 mt-2 text-sm">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4 flex">
                                <p class="text-gray-500 text-xl w-4/12 pt-3">Tên đơn vị: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào tên đơn vị ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="">

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 mt-2 text-sm">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-6 mb-2 w-full flex-col">
                    <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                        <h1 class="">Danh sách đơn vị</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <ul class="flex items-center">
                            <li class="flex items-center px-2">
                                Tìm kiếm đơn vị: 
                            </li>
                            <li class="flex items-center px-2">
                                <input type="text" id="search" name="search" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            </li>
                        </ul>

                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã đơn vị</th>
                                <th class="w-full border-collapse border border-gray-500 p-2">Tên đơn vị</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">Intro to CSS</td>
                                <td class="border-collapse border border-gray-500 p-2">Adam</td>
                                <td class="border-collapse border border-gray-500 p-2">858</td>
                                <td class="border-collapse border border-gray-500 p-2">858</td>
                            </tr>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">121321</td>
                                <td class="border-collapse border border-gray-500 p-2">Adam</td>
                                <td class="border-collapse border border-gray-500 p-2">112</td>
                                <td class="border-collapse border border-gray-500 p-2">858</td>
                            </tr>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">Intro to JavaScript</td>
                                <td class="border-collapse border border-gray-500 p-2">Chris</td>
                                <td class="border-collapse border border-gray-500 p-2">1,280</td>
                                <td class="border-collapse border border-gray-500 p-2">858</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/layouts/admin/lecturer_management/update/update_unit.blade.php ENDPATH**/ ?>