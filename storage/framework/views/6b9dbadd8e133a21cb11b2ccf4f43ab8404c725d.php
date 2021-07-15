

<?php $__env->startSection('content'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="text-gray-700 text-2xl font-black m-4 mb-6 flex justify-center">
            <h1 class="">Thống kê </h1>
        </div>
        <div>
            <form action="<?php echo e(route('analyse/lecturers')); ?>" class="m-2">
                <ul class="p-3 m-5">
                    <li class="float-left">
                        <p class="text-gray-700">Báo cáo</p>
                        <select id="subject_types" name="subject_types" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <option>Mã giảng viên</option>
                            <option>Mã đơn vị</option>
                            <option>Mã công việc</option>

                           
                        </select>
                    </li>
                    <li class="float-left mr-10 ">
                        <p class="text-gray-700">Thống kê theo mức độ hoàn thành</p>
                        <select id="major_types" name="major_types" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <option>Chưa thực hiện</option>
                            <option>Đang thực hiện</option>
                            <option>Hoàn thành</option>
                            
                        </select>
                    </li>

                    <li class="float-left mr-10">
                        <p class="text-gray-700">Thống kê số lượng người tham gia theo công việc</p>
                        <select id="major_types" name="major_types" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <option>0-5 người</option>
                            <option>5-10 người</option>
                            <option>>10 người</option>
                            
                        </select>
                    </li>

                    <li class="float-left">
                        <p class="text-gray-700">Thống kê số lượng theo khoảng thời gian thực hiện</p>
                       Từ: <input type="date" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" >
                     đến: <input type="date" id="keyword" name="keyword" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" >
                    </li>
                          
                    <li class="float-left">
                        <button class="bg-blue-500 rounded-lg ml-4 p-3 text-white">Thống kê</button>
                    </li>
                </ul>
            </form>
        </div>
        <table class=" w-full p-3 bg-white table-fixed flex-col justify-center">
            <thead>
                <tr>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã công việc</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên công việc</th>
                        <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã đơn vị</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Mức độ hoàn thành</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Số lượng</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày bắt đầu</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày kết thúc</th>
                        <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/teacher_work_schedule/Statistical/statistcal_teacher_work_schedule.blade.php ENDPATH**/ ?>