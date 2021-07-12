

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Cập nhật</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/type')); ?>">=> Cập nhật loại khoa học/ Cấp thực hiện</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/magazine')); ?>">=> Cập nhật danh mục tạp chí</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/info')); ?>">=> Cập nhật thông tin chi tiết về đề tài  NCKH hay giáo trình/ bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/role')); ?>">=> Cập nhật thông tin về vai trò tham gia của GV vào NCKH hay giáo trình/ bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/category')); ?>">=> Cập nhật danh mục hội thảo, hội nghị</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/seminor_role')); ?>">=> Cập nhật thông tin chi tiết vai trò tham gia của GV vào HN-HT</a>
                        </li>
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('/nckh_update/fostering')); ?>">=> Cập nhật về bồi dưỡng của GV</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php echo $__env->yieldContent('update_nckh'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/scientific_research_management_of_lecturers/menu_update.blade.php ENDPATH**/ ?>