

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Cập nhật</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white ">
                            <a href="<?php echo e(route('update/kind_of_sciences')); ?>">=> Cập nhật loại khoa học</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/update_implementation_levels')); ?>">=> Cập nhật cấp thực hiện</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/topics_syllabuses')); ?>">=> Cập nhật đề tài giáo trình</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/topic_details')); ?>">=> Cập nhật chi tiết đề tài giáo trình</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/journals')); ?>">=> Cập nhật danh mục tạp chí</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/articles')); ?>">=> Cập nhật bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/article_details')); ?>">=> Cập nhật chi tiết bài báo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/conferences')); ?>">=> Cập nhật danh mục hội nghị hội thảo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/conferences_details')); ?>">=> Cập nhật chi tiết hội nghị hội thảo</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="<?php echo e(route('update/extra_trainings')); ?>">=> Cập nhật danh mục bồi dưỡng</a>
                        </li>
                    </ul>
                </div>
            </div>

            <?php echo $__env->yieldContent('update_nckh'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/layouts/admin/scientific_research_management_of_lecturers/menu_update.blade.php ENDPATH**/ ?>