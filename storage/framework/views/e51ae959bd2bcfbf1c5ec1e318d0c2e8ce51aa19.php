

<?php $__env->startSection('search_work'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm theo giảng viên trong khoảng thời gian</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="<?php echo e(route('search/details/lecturers')); ?>" class="w-6/12 flex justify-between">

                <div class="flex-col">
                    <p class="text-gray-700">Nhập mã giảng viên:</p>
                    <input type="text" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập mã giảng viên...">
                </div>
                
                <div class="flex-col">
                    <p class="text-gray-700">Nhập ngày bắt đầu:</p>
                    <input type="date" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập ngày bắt đầu ...">
                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập ngày kết thúc:</p>
                    <input type="date" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập ngày kết thúc ...">
                </div>

                <button type="submit" class="bg-blue-500 text-white rounded px-4 font-medium">Search</button>
            </form>
        </div>

        <div class="w-full flex-col border-t-2 border-gray-400">
            <div class="text-gray-700 text-2xl font-black m-4 mb-6 flex justify-center">
                <h1 class="">Kết quả tìm kiếm</h1>
            </div>
            <table class="bg-white table-fixed flex-col justify-center">
                <thead>
                    <tr>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên giảng viên</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã công việc</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã đơn vị</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Vai trò</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày bắt đầu</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày kết thúc</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.teacher_work_schedule.search.menu_search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/teacher_work_schedule/search/search_teacher_work/search_for_lecturers_by_time.blade.php ENDPATH**/ ?>