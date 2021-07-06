<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
         <?php if($unit->name != ""): ?>
            <form action="<?php echo e(route('edit/units', $unit)); ?>" method="post">
            <?php echo csrf_field(); ?>
                <input style="display: none;" type="text" id="id" name="id"
                value="<?php echo e($unit->id); ?>">
                <input type="text" id="temp_id" name="temp_id" 
                value="<?php echo e($unit->id); ?>" disabled>
                <input type="text" id="name" name="name" value="<?php echo e($unit->name); ?>">
                <button type="submit">save</button>
            </form>
         
         <?php else: ?>
         <form action="<?php echo e(route('edit/units', $unit)); ?>" method="post">
         <?php echo csrf_field(); ?>
            <input style="display: none;" type="text" id="id" name="id"
             value="<?php echo e($unit->id); ?>">
            <input type="text" id="temp_id" name="temp_id" 
            value="<?php echo e($unit->id); ?>" disabled>
            <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>">
            <p>Tên không hợp lệ</p>
            <button type="submit">save</button>
        </form>
         <?php endif; ?>
           
        
    
</body>
</html>
<?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_units.blade.php ENDPATH**/ ?>