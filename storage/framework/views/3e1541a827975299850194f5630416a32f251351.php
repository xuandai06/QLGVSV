<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo e(route('edit/levels', $level)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" id="id" name="id" value="<?php echo e($level->id); ?>" disabled>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name') ?? $level->name); ?>">
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

</html><?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_levels.blade.php ENDPATH**/ ?>