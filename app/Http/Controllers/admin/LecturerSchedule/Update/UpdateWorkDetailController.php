<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Update;

use App\Http\Controllers\Controller;
use App\Models\Work_detail;
use Illuminate\Http\Request;

class UpdateWorkDetailController extends Controller
{
    public function index()
    {
        $work_details = Work_detail::paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.update.update_works_detail',
            ['work_details' => $work_details]
        );
    }

    public function store(Request $request)
    {
        $test = Work_detail::where('work_id', '=', $request->work_id)
        ->where('lecturer_id','=',$request->lecturer_id)->get();
       
        if($test->count() != 0){
            return back()->with('error', 'Mã công việc và mã giảng viên đã tồn tại')
            ->with('unit_id', $request->unit_id)
            ->with('lecturer_id', $request->lecturer_id)
            ->with('role', $request->role)
            ->with('note', $request->note);
        }

        $work_detail = new Work_detail();
        $work_detail->work_id = $request->work_id;
        $work_detail->lecturer_id = $request->lecturer_id;
        $work_detail->role = $request->role;
        $work_detail->note = $request->note;
        $work_detail->save();

        return redirect()->route('update/work/details')->with('status', 'Thêm chi tiết công việc thành công')
            ->with('work_id', $request->work_id)
            ->with('lecturer_id', $request->lecturer_id)
            ->with('role', $request->role)
            ->with('note', $request->note);
    }

    public function delete($work_id, $lecturer_id)
    {
        Work_detail::where('work_id','=', $work_id)
        ->where('lecturer_id','=', $lecturer_id)
        ->delete();

        return redirect()->route('update/work/details');
    }

    public function edit_index($work_id, $lecturer_id)
    {
        $work_detail = Work_detail::where('work_id','=', $work_id)
        ->where('lecturer_id','=', $lecturer_id)->first();
        
        return view(
            'layouts.admin.teacher_work_schedule.update.edit.edit_works_detail',
            ['work_detail' => $work_detail]
        );
    }

    public function edit(Request $request, $work_id, $lecturer_id)
    {
        
        Work_detail::where('work_id','=', $work_id)
        ->where('lecturer_id','=', $lecturer_id)
        ->update(['role' => $request->role, 'note' => $request->note]);

        return back()->with('status', 'Cập nhật chi tiết công việc thành công');
    }
    public function search(Request $request)
    {
       
        $work_details =  Work_detail::where('work_id', 'LIKE', '%' . $request->id . '%')->paginate(10);

        return view(
            'layouts.admin.teacher_work_schedule.update.update_works_detail',
            ['work_details' => $work_details]
        );
    }
}
