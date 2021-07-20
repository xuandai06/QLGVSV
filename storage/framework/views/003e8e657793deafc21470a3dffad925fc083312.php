

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center mt-2">
        <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg flex justify-between">
            <div class="w-3/12 bg-gray-200 rounded-lg p-2">
                <div class="flex justify-center pt-2">
                    <h1 class="text-2xl text-blue-400">Thống kê báo cáo</h1>
                </div>
                <div class="text-gray-500 p-3">
                    <ul class="flex-col">
                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=>Thống kê số đề tài NCKH/ KLTN theo năm của khoa, ngành, lớp</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=>Báo cáo thống kê đề tài NCKH theo giải thưởng, kết quả</a>
                        </li>

                        <li class="px-2 py-3 rounded-lg hover:bg-blue-400 hover:text-white">
                            <a href="">=>Báo cáo thống kê đề tài NCKH/KLTN theo giảng viên hướng dẫn</a>
                        </li>

                    </ul>
                </div>
            </div>

            <?php echo $__env->yieldContent('statistical_science_student'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/scientific_research_management_of_student/statistical/menu_statistical.blade.php ENDPATH**/ ?>