

<?php $__env->startSection('content'); ?>
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
        <div class="text-gray-700 text-2xl font-black m-4 mb-6 flex justify-center">
            <h1 class="">Thống kê giảng viên</h1>
        </div>
        <div>
            <form action="<?php echo e(route('analyse/lecturers')); ?>">
                <ul class="p-4">
                    <li class="float-left">
                        <p class="text-gray-700">Tìm theo bộ môn</p>
                        <select id="subject_types" name="subject_types" class="mr-2 mb-4 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>

                            <?php

                            use App\Models\Lecturer;
                            use App\Models\Subject;

                            $subjects = Subject::all() ?>
                            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option><?php echo e($subject->name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </li>
                    <li class="float-left">
                        <p class="text-gray-700">Tìm theo ngành</p>
                        <select id="major_types" name="major_types" class="mr-2 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <?php

                            use App\Models\Major;

                            $majors = Major::all() ?>
                            <?php $__currentLoopData = $majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option><?php echo e($major->name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </li>
                    <li class="float-left">
                        <p class="text-gray-700">Tìm theo trình độ</p>
                        <select id="level_types" name="level_types" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <?php

                            use App\Models\Level;

                            $levels = Level::all() ?>
                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option><?php echo e($level->name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </li>
                    <li class="float-left">
                        <p class="text-gray-700">Tìm theo chức vụ</p>
                        <select id="position_types" name="position_types" class="mr-2 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <?php

                            use App\Models\Position;
                            use Illuminate\Support\Facades\DB;

                            $positions = Position::all() ?>
                            <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option><?php echo e($position->name); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </li>
                    <li class="float-left">
                        <p class="text-gray-700">Tìm theo giới tính</p>
                        <select id="sex_types" name="sex_types" class="mr-12 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <option> Nam</option>
                            <option> Nữ</option>
                            <option> Khác</option>

                        </select>
                    </li>
                    <li class="float-left">

                        <p class="text-gray-700">Tìm theo khu vực sinh sống</p>
                        <select id="address_types" name="address_types" class=" form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <option>Không</option>
                            <?php
                            $addresses = Lecturer::select('address')
                                ->distinct()
                                ->get();
                            ?>
                            <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option><?php echo e($address->address); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </li>

                    <li class="float-left">
                        <button class="bg-blue-500 rounded-lg ml-4 p-3 text-white">Thống kê</button>
                    </li>
                </ul>
            </form>
        </div>

        <table class="bg-white table-fixed flex-col justify-center text-xs clear-left">
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
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Tên bộ môn</th>
                    <th class="w-1/12 border-collapse border border-gray-500 p-2">Ghi chú</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->id); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->name); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->sex); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->birthday); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->hometown); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->address); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->phone_number); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->level->name); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->position->name); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->major->name); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->major->subject->name); ?></td>
                <td class="border-collapse border border-gray-500 p-2"><?php echo e($lecturer->note); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ungDung\laragon\wwww\QLGVSV\resources\views/layouts/admin/lecturer_management/statistical/statistical_lecturers.blade.php ENDPATH**/ ?>