<form action="<?php echo e(route('edit/units', $unit)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input style="display: none;" type="text" id="id" name="id" value="<?php echo e($unit->id); ?>">
    <input type="text" id="temp_id" name="temp_id" value="<?php echo e($unit->id); ?>" disabled>
    <input type="text" id="name" name="name" value="<?php echo e($unit->name); ?>">
    <button type="submit">save</button>
</form><?php /**PATH H:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/layouts/admin/lecturer_management/update/edit/edit_units.blade.php ENDPATH**/ ?>