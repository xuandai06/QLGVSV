

<?php $__env->startSection('update_lecturer'); ?>
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập thông tin về ngành</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Sửa thông tin ngành</h1>
                        </div>


    <form action="<?php echo e(route('edit/majors', $major)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="name">Mã ngành </label>
        <input type="text" id="id" name="id" value="<?php echo e($major->id); ?>" disabled class="bg-white p-2 mx-5 ml-10 font-bold rounded-lg
         border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"><hr>
         <label for="name">Tên ngành</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name') ?? $major->name); ?>" class="bg-white p-4 py-2 mx-5 ml-9 rounded-lg
                            border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"><hr>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label for="name">Mã bộ môn</label>
        <input type="text" id="subject_id" name="subject_id" value="<?php echo e(old('subject_id') ?? $major->subject_id); ?>" class="bg-white p-4 py-2 ml-8 mx-5 rounded-lg
           border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
        <?php $__errorArgs = ['subject_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div>
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-3/12">Save</button>
    </form>
    <?php if(session('status')): ?>
    <div class="text-green-500 p-3">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.lecturer_management.menu_update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_majors.blade.php ENDPATH**/ ?>