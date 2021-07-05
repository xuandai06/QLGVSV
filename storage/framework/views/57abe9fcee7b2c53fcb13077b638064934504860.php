

<?php $__env->startSection('content'); ?>
    <div class="p-3 flex justify-between ">
        <div class="w-4/12 bg-white p-2 border-double border-4 border-blue-300 rounded-lg flex justify-center">
            <div class="p-2 w-10/12 pt-24">
                <div class="text-blue-300 text-4xl font-black mb-6 flex justify-center">
                    <h1 class="">Đăng nhập</h1>
                </div>
                <div class="flex justify-between">
                    
                    <form action=" <?php echo e(route('login')); ?>" method="post" class="w-full">
                        <?php echo csrf_field(); ?>   

                        <?php if(session('status')): ?>
                                <div class="text-red-500">
                                    <?php echo e(session('status')); ?>

                                </div>
                        <?php endif; ?>

                        <div class="mb-4">
                                <input type="text" name="email" id="email" placeholder="Nhập vào gmail..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('gmail')); ?>">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-red-500 mt-2 text-sm">
                                        Tài khoản không được để trống!
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-4">
                                <input type="password" name="password" id="password" placeholder="Nhập vào mật khẩu ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-red-500 mt-2 text-sm">
                                        <!--<?php echo e($message); ?>-->
                                        Mật khẩu từ 6 ký tự trở lên!
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\QLGVSV\resources\views/auth/login.blade.php ENDPATH**/ ?>