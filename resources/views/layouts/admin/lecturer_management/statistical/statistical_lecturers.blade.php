@extends('layouts.menu')

@section('content')
<div class="flex justify-center mt-2">
    <div class="w-full bg-white p-6 border-2 border-gray-400 rounded-lg">
    <div class="text-gray-700 text-2xl font-black m-4 mb-6 flex justify-center">
                <h1 class="">Thống kê giảng viên</h1>
            </div>
        <div>
             <ul   class="p-4" >
     
                    <li class="float-left"><p class="text-gray-700">Tìm theo bộ môn</p>
                    <select id="search_type" name="search_type" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" >
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
                    </li>
                    <li class="float-left"><p class="text-gray-700">Tìm theo ngành</p>
                    <select id="search_type" name="search_type" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>Công nghệ thông tin</option>
                        <option>Điện - Điện tử</option>
                        <option>Kinh tế</option>
                        <option>Quản trị kinh doanh</option>
                        <option>Sư phạm</option>
                        <option>Kế toán</option>
                        <option>Nông Lâm Ngư</option>
                        <option>Quản trị du lịch</option>
                        
                    </select>
                    </li>
                    <li class="float-left"><p class="text-gray-700">Tìm theo trình độ</p>
                    <select id="search_type" name="search_type" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>Tiến sĩ</option>
                        <option>Thạc sĩ</option>
                        <option>Cử nhân</option>
                    </select>
                    </li>
                   <li class="float-left"><p class="text-gray-700">Tìm theo chức vụ</p>
                    <select id="search_type" name="search_type" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>Giảng viên</option>
                        <option>Cố vấn học tập</option>
                        <option>Trưởng khoa</option>
                        <option>Phó khoa</option>
                        
                    </select>
                   </li>
                   <li class="float-left"><p class="text-gray-700">Tìm theo giới tính</p>
                    <select id="search_type" name="search_type" class="mr-20 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option> Nam</option>
                        <option> Nữ</option>
                     
                    </select>
                    <li><p class="text-gray-700">Tìm theo khu vực sinh sống</p>
                    <select id="search_type" name="search_type" class="mr-10 form-select border-2 border-gray-200 p-2 text-gray-500
                    focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                        <option>Tiến sĩ</option>
                        <option>Thạc sĩ</option>
                        <option>Cử nhân</option>
                    </select>
                </ul>
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
            </table>
     
    </div>
</div>
@endsection