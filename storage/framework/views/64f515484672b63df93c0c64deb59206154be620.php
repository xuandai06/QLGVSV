

<?php $__env->startSection('content'); ?>
    <div class="p-3 flex justify-between ">
        <div class="w-4/12 bg-white p-2 border-double border-4 border-gray-400 rounded-lg flex justify-center">
            <div class="p-2 w-10/12">
                <div class="text-blue-300 text-4xl font-black mb-6 flex justify-center">
                    <h1 class="">Login</h1>
                </div>
                <div class="flex justify-between">
                    <form action="" class="w-full">
                        <?php echo csrf_field(); ?>   
                        <div class="mb-4">
                                <input type="text" name="ma" id="ma" placeholder="Enter the your code ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                <?php $__errorArgs = ['ma'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('ma')); ?>">

                                <?php $__errorArgs = ['ma'];
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

                        <div class="mb-4">
                                <input type="password" name="password" id="password" placeholder="Choose a password ..." class="bg-gray-100 border-2 w-full p-4 rounded-lg
                                <?php $__errorArgs = ['password'];
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
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/auth/login.blade.php ENDPATH**/ ?>