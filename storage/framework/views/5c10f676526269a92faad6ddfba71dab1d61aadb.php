<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo e(route('edit/subjects', $subject)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" id="temp_id" name="temp_id" value="<?php echo e($subject->id); ?>" disabled>
        <label for="unit_id">Unit id</label>
        <input type="text" id="unit_id" name="unit_id" value="<?php echo e(old('unit_id') ?? $subject->unit_id); ?>">
        <?php $__errorArgs = ['unit_id'];
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
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name') ?? $subject->name); ?>">
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
        <button type="submit">save</button>
    </form>
    <?php if(session('status')): ?>
    <div class="text-red-500">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>


</body>

</html><?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_subjects.blade.php ENDPATH**/ ?>