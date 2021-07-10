

<?php $__env->startSection('update_lecturer'); ?>
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin cá nhân</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-9/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm thông tin cá nhân</h1>
                        </div>
                        <?php if(session('status')): ?>
                        <div class="text-red-500">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('add/lecturers')); ?>" method="post" class=" flex-col justify-center">
                            <?php echo csrf_field(); ?>

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Mã giảng viên: </p>
                                <input type="text" name="id" id="id" placeholder="Nhập vào mã giảng viên ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('id')); ?>">

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
                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Email: </p>
                                <input type="text" name="email" id="email" placeholder="Nhập vào gmail ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>">

                                <?php $__errorArgs = ['email'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Họ tên giảng viên: </p>
                                <input type="text" name="name" id="name" placeholder="Nhập vào họ tên..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>">

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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Giới tính: </p>
                                <select name="sex" id="sex">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Bê đê">Bê đê</option>
                                </select>
                            </div>

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Ngày sinh: </p>
                                <input type="date" name="birthday" id="birthday" placeholder="Nhập vào ngày sinh ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('birthday')); ?>">

                                <?php $__errorArgs = ['birthday'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Quê quán: </p>
                                <input type="text" name="hometown" id="hometown" placeholder="Nhập vào quê quán ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['hometown'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('hometown')); ?>">

                                <?php $__errorArgs = ['hometown'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Địa chỉ: </p>
                                <input type="text" name="address" id="address" placeholder="Nhập vào địa chỉ ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('address')); ?>">

                                <?php $__errorArgs = ['address'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Số điện thoại: </p>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Nhập vào số điện thoại ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('phone_number')); ?>">

                                <?php $__errorArgs = ['phonenumber'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Ghi chú: </p>
                                <input type="text" name="note" id="note" placeholder="Nhập vào ghi chú ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('note')); ?>">

                                <?php $__errorArgs = ['note'];
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


                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Mã trình độ: </p>
                                <input type="text" name="level_id" id="level_id" placeholder="Nhập vào mã trình độ ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['level_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('level_id')); ?>">

                                <?php $__errorArgs = ['level_id'];
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
                            
                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Mã chức vụ: </p>
                                <input type="text" name="position_id" id="position_id" placeholder="Nhập vào mã chức vụ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['position_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('position_id')); ?>">

                                <?php $__errorArgs = ['position_id'];
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

                            <div class="mb-2 flex">
                               
                                <label for="major_id" class="text-gray-500 text-xl w-5/12 pt-3">Mã ngành: </label>
                                <input type="text" name="major_id" id="major_id" placeholder="Nhập vào mã ngành ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['major_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('major_id')); ?>">

                                <?php $__errorArgs = ['major_id'];
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

                            <div class="mb-2 flex">
                              
                                <label for="password" class="text-gray-500 text-xl w-5/12 pt-3">Mật khẩu: </label>
                                <input type="password" name="password" id="password" placeholder="Nhập vào mật khẩu ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <?php $__errorArgs = ['password'];
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

                            <div class="mb-2 flex">
                                <p class="text-gray-500 text-xl w-5/12 pt-3">Nhập lại mật khẩu: </p>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Nhập vào lại mật khẩu ..." class="bg-white w-8/12 p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <?php $__errorArgs = ['password_confirmation'];
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
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="p-6 mb-2 w-full flex-col border-t-2 border-gray-400">
                    <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                        <h1 class="">Danh sách trình độ</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="<?php echo e(route('search/lecturers')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <label for="id" class="ml-2">Tìm kiếm theo mã giảng viên</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="id" name="id" value="<?php echo e(old('id')); ?>" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên giảng viên</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Giới tính</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày sinh</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Quê quán</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa chỉ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Số điện thoại</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã trình độ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã chức vụ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã ngành</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->name); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->sex); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->birthday); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->hometown); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->address); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->phone_number); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->level_id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->position_id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->major_id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->note); ?></td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <a href="<?php echo e(route('edit/lecturers/index', $lecturer->id)); ?>">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2">
                                    <form action="<?php echo e(route('delete/lecturers', $lecturer)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.lecturer_management.menu_update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/lecturer_management/update/update_lecturers.blade.php ENDPATH**/ ?>