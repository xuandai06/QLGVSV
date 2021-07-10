

<?php $__env->startSection('content'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm giảng viên</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="" class="w-6/12 flex justify-between">
                <label class="flex-col">
                    <p class="text-gray-700">Lựa chọn hình thức tìm</p>
                    <select class="form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>Tìm theo mã giảng viên</option>
                        <option>Tìm theo chức vụ</option>
                        <option>Tìm theo ngành</option>
                        <option>Tìm theo trình độ</option>
                        <option>Tìm theo bộ môn</option>
                        <option>Tìm theo họ tên</option>
                        <option>Tìm theo tên</option>
                        <option>Tìm theo địa chỉ</option>
                        <option>Tìm theo quê quán</option>
                        <option>Tìm theo giới tính</option>
                    </select>
                </label>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập thông tin muốn tìm:</p>
                    <input type="text" id="search" name="search" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập thông tin muốn tìm ...">
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
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Giới tính</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ngày sinh</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Quê quán</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa chỉ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Số điện thoại</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên trình độ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên chức vụ</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên ngành</th>
                                <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->id</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->name</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->sex</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->birthday</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->hometown</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->address</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->phone_number</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->level->name</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->position->name</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->major->name</td>
                                <td class="border-collapse border border-gray-500 p-2">$lecturer->note</td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\QLGVSV\resources\views/layouts/admin/lecturer_management/search/search_lecturers.blade.php ENDPATH**/ ?>