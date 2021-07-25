

<?php $__env->startSection('search_work'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="flex justify-center text-2xl text-blue-400">
            <h1>Tìm kiếm theo mã đơn vị trong khoảng thời gian</h1>
        </div>
        <div class="flex justify-center m-4">
            <form action="<?php echo e(route('search/for_units_by_time')); ?>" class="w-6/12 flex justify-between">

                <div class="flex-col">
                    <p class="text-gray-700">Nhập mã đơn vị:</p>
                    <div class="mb-4 flex-col">
                        <div class="flex">
                            <?php

                            use App\Models\Work_assignment;

                            $unit_ids = Work_assignment::select('unit_id')->distinct()->get();
                            ?>
                            <select name="unit_id" id="unit_id">
                            <option value="Không">Không</option>
                                <?php $__currentLoopData = $unit_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($unit_id->unit_id); ?>"><?php echo e($unit_id->unit_id); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập ngày bắt đầu:</p>
                    <input type="datetime-local" id="start_time" name="start_time" class="p-1 border-2 border-gray-200
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" placeholder="Nhập ngày bắt đầu ...">
                </div>

                <div class="flex-col">
                    <p class="text-gray-700">Nhập ngày kết thúc:</p>
                    <input type="datetime-local" id="end_time" name="end_time" class="p-1 border-2 border-gray-200
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

                <tr>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Đơn vị</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã công việc</th>
                    <th class="w-2/12 border-collapse border border-gray-500 p-2">Tên công việc</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Thời gian bắt đầu</th>
                    <th class="w-2/12 border-collapse border border-gray-500 p-2">Thời gian kết thúc</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Địa điểm</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú công việc</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Trạng thái</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú kết quả</th>
                </tr>

                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td class="border-collapse border border-gray-500 p-2">
                        <table class="bg-white table-fixed flex-col justify-center">

                            <thead>

                                <tr>
                                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Mã đơn vị</th>
                                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên đơn vị</th>
                                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Vai trò</th>
                                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $work->work_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work_assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="w-1/12 border-collapse border border-gray-500 p-2"><?php echo e($work_assignment->unit_id); ?></td>
                                    <td class="w-1/12 border-collapse border border-gray-500 p-2"><?php echo e($work_assignment->unit->name); ?></td>
                                    <td class="w-1/12 border-collapse border border-gray-500 p-2"><?php echo e($work_assignment->role); ?></td>
                                    <td class="w-1/12 border-collapse border border-gray-500 p-2"><?php echo e($work_assignment->note); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->id); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->name); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->start_time); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->end_time); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->place); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->note); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->result->status); ?></td>
                    <td class="border-collapse border border-gray-500 p-2"><?php echo e($work->result->note); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.teacher_work_schedule.search.menu_search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/teacher_work_schedule/search/search_teacher_work/search_for_units_by_time.blade.php ENDPATH**/ ?>