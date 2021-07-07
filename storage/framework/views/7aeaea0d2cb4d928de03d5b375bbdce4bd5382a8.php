<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <form action="<?php echo e(route('edit/units', $unit)); ?>" method="post">
                 <?php echo csrf_field(); ?>
                <input type="text" id="temp_id" name="temp_id" 
                value="<?php echo e($unit->id); ?>" disabled>
                <input type="text" id="name" name="name" value="<?php echo e(old('name') ?? $unit->name); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit">save</button>
            </form>
           
</body>
</html>
<?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_units.blade.php ENDPATH**/ ?>