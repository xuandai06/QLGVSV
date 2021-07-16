

<?php $__env->startSection('content'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm theo mã giảng viên</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="<?php echo e(route('search/details/lecturers')); ?>" class="w-6/12 flex justify-between">

                <div class="flex-col">
                    <p class="text-gray-700">Nhập mã giảng viên:</p>
                    <input type="text" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập mã giảng viên ...">
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
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã học phần</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Phòng</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày dạy</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Số tiết</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Tiết bắt đầu</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/timetable/Search/search_by_teacher_code.blade.php ENDPATH**/ ?>