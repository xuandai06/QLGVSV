

<?php $__env->startSection('statistical'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Thống kê số lượng sinh viên tốt nghiệp, thôi học</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="" class="w-8/12 flex justify-between">

            <div class="flex-col">
                    <p class="text-gray-700">Thống kê theo:</p>
                    <select name="name" id="name" class="bg-white w-full p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option value="Lớp">Lớp</option>
                        <option value="Ngành">Ngành</option>
                        <option value="Khóa">Khóa</option>
                    </select>
                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Thống kê theo:</p>
                    <select name="name" id="name" class="bg-white w-full p-2 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option value="Tốt nghiệp">Tốt nghiệp</option>
                        <option value="thôi học">Thôi học</option>
                    </select>
                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập năm học:</p>
                    <input type="text" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập thông tin cần tìm ...">
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
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên sinh viên</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Giới tính</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Lớp học</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngành</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Khóa học</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Năm tốt nghiệp</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Thôi học</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Điểm học tập</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Điểm rèn luyện</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.student_management.statistical.menu_statistical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/student_management/statistical/statistical_student/statistical_student_graduate_quit.blade.php ENDPATH**/ ?>