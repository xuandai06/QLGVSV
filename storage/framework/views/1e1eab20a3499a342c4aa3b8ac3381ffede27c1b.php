

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
                            <a href="">=> Cập nhật lý lịch sinh viên</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về lớp</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về nội, ngoại trú</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về đối tượng chính sách</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về khen thưởng kỷ luật </a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về tốt nghiệp</a>
                        </li>
                        
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về thôi học</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=> Cập nhật thông tin về điểm học tập/rèn luyện</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php echo $__env->yieldContent('update_lecturer'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/student_management/menu_update.blade.php ENDPATH**/ ?>