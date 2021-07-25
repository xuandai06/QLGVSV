

<?php $__env->startSection('update_nckh'); ?>
<div class="w-9/12 ml-2 flex justify-center">
    <div class="w-full bg-white p-6 border-double border-4 border-gray-400 rounded-lg">
        <div class="w-full bg-white flex-col justify-between px-6 text-black rounded-lg mt-1">
            <div class="flex items-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
                <p class="clear-left p-2">Cập nhập chi tiết bài báo</p>
            </div>

            <div class="w-full bg-gray-200 flex-row justify-between px-6 text-gray-500 rounded-lg mt-1">
                <div class="w-8/12 p-2 rounded-lg flex items-center">
                    <div class="p-6 w-10/12">
                        <div class="text-blue-300 text-2xl font-black mb-6 flex justify-center">
                            <h1 class="">Thêm chi tiết bài báo</h1>
                        </div>
                        <?php if(session('status')): ?>
                        <div class="text-green-500 p-3">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('add/article_details')); ?>" method="post" class=" flex-col justify-center">
                            <?php echo csrf_field(); ?>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã bài báo: </p>
                                    <?php

                                    use App\Models\Lecturer;
                                    use App\Models\Article;

                                    $articles = Article::all();
                                    $lecturers = Lecturer::all();
                                    ?>

                                    <select name="article_id" id="article_id" class="bg-white w-8/12 p-4 rounded-lg
                                    border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(session('article_id') == $article->id): ?>
                                        <option selected value="<?php echo e($article->id); ?>"><?php echo e($article->id); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($article->id); ?>"><?php echo e($article->id); ?></option>
                                        <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <?php $__errorArgs = ['article_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Mã giảng viên: </p>

                                    <select name="lecturer_id" id="lecturer_id" class="bg-white w-8/12 p-4 rounded-lg
                                    border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                        <?php $__currentLoopData = $lecturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(session('lecturer') == $lecturer->id): ?>
                                        <option selected value="<?php echo e($lecturer->id); ?>"><?php echo e($lecturer->id); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($lecturer->id); ?>"><?php echo e($lecturer->id); ?></option>
                                        <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <?php $__errorArgs = ['lecturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-4 flex-col">
                                <div class="flex">
                                    <p class="text-gray-500 text-xl w-5/12 pt-3">Vai trò: </p>
                                    <input type="text" name="role" id="role" placeholder="Nhập vào vai trò ..." class="bg-white w-8/12 p-4 rounded-lg
                                border-2 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="">
                                </div>

                                <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-red-500 mt-2 pl-44 text-sm">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-3/12">Lưu</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="p-6 mb-2 w-full flex-col border-t-2 border-gray-400">
                    <div class="text-gray-700 text-2xl font-black mb-2 flex justify-center">
                        <h1 class="">Danh sách bài báo</h1>
                    </div>
                    <nav class="w-8/12 p-2 flex-row-reverse justify-between">
                        <form action="<?php echo e(route('search/article_details')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <label for="id" class="ml-2">Tìm kiếm</label>
                            <input class="m-2 p-1 border-2 border-gray-300" type="text" id="article_id" name="article_id" placeholder="Nhập mã muốn tìm ..." class="border-2 rounded-lg border-gray-100 p-1
                                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                            <button type="submit" class="px-3 py-1 bg-white hover:bg-blue-400 hover:text-white">Search</button>
                        </form>
                    </nav>
                    <table class="bg-white table-fixed flex-col justify-center">
                        <thead>
                            <tr>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã bài báo</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Mã giảng viên</th>
                                <th class="w-6/12 border-collapse border border-gray-500 p-2">Vai trò</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Sửa</th>
                                <th class="w-2/12 border-collapse border border-gray-500 p-2">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $article_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-collapse border border-gray-500 p-2 text-center"><?php echo e($article_detail->article_id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2 text-center"><?php echo e($article_detail->lecturer_id); ?></td>
                                <td class="border-collapse border border-gray-500 p-2"><?php echo e($article_detail->role); ?></td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">
                                    <a href="<?php echo e(route('edit/article_details/index',['article_id' => $article_detail->article_id
                                        , 'lecturer_id' => $article_detail->lecturer_id])); ?>" class="hover:text-yellow-500">Edit</a>
                                </td>
                                <td class="border-collapse border border-gray-500 p-2 text-center">
                                    <form action="<?php echo e(route('delete/article_details',['article_id' => $article_detail->article_id
                                        , 'lecturer_id' => $article_detail->lecturer_id])); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button class="hover:text-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.scientific_research_management_of_lecturers.menu_update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Tong hop de cuong on tap\du_an\QLGVSV\resources\views/layouts/admin/scientific_research_management_of_lecturers/update/update_article_details.blade.php ENDPATH**/ ?>