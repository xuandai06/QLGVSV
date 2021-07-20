

<?php $__env->startSection('statistical_science_student'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Thống kê đề tài NCKH/ KLTN theo giảng viên hướng dẫn</h1>
        </div>
        <div class="m-4">
            <form action="" class="w-8/12 flex justify-between">

            <div class="flex-col">
                <label class="flex-col">
                    <p class="text-gray-700">Chọn: </p>
                    <select id="search_type" name="search_type" class="form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>NCKH</option>
                        <option>KLTN</option>
                    </select>
                </label>
                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập tên GVHD:</p>
                    <input type="text" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập tên...">
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
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã SV</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã đề tài</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên đề tài</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Giáo viên hướng dẫn</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày bắt đầu thực hiện</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày kết thúc thực hiện</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Giải thưởng</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Kết quả</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.scientific_research_management_of_student.statistical.menu_statistical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/scientific_research_management_of_student/statistical/statistical_science_student/statistical_science_instructor.blade.php ENDPATH**/ ?>