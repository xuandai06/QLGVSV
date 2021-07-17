<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Update;

use App\Http\Controllers\Controller;
use App\Models\Work_assignment;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class UpdateWorkAssignmentController extends Controller
{
    public function index()
    {
        $work_assignments = Work_assignment::paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.update.update_work_assignment',
            ['work_assignments' => $work_assignments]
        );
    }

    public function store(Request $request)
    {
        $test = Work_assignment::where('work_id', '=', $request->work_id)
        ->where('unit_id','=',$request->unit_id)->get();
       
        if($test->count() != 0){
            return back()->with('error', 'Mã công việc và mã đơn vị đã tồn tại')
            ->with('unit_id', $request->unit_id)
            ->with('work_id', $request->work_id)
            ->with('role', $request->role)
            ->with('note', $request->note);
        }

        $work_assignment = new Work_assignment();
        $work_assignment->work_id = $request->work_id;
        $work_assignment->unit_id = $request->unit_id;
        $work_assignment->role = $request->role;
        $work_assignment->note = $request->note;
        $work_assignment->save();

        return redirect()->route('update/work/assignments')->with('status', 'Thêm công việc thành công')
            ->with('work_id', $request->work_id)
            ->with('unit_id', $request->unit_id)
            ->with('role', $request->role)
            ->with('note', $request->note);
    }

    public function delete($work_id, $unit_id)
    {
        Work_assignment::where('work_id','=', $work_id)
        ->where('unit_id','=', $unit_id)
        ->delete();

        return redirect()->route('update/work/assignments');
    }

    public function edit_index($work_id, $unit_id)
    {
        $work_assignment = Work_assignment::where('work_id','=', $work_id)
        ->where('unit_id','=', $unit_id)->first();
        
        return view(
            'layouts.admin.teacher_work_schedule.update.edit.edit_work_assignments',
            ['work_assignment' => $work_assignment]
        );
    }

    public function edit(Request $request, $work_id, $unit_id)
    {
        
        Work_assignment::where('work_id','=', $work_id)
        ->where('unit_id','=', $unit_id)
        ->update(['role' => $request->role, 'note' => $request->note]);

        return back()->with('status', 'Cập nhật công việc thành công');
    }
    public function search(Request $request)
    {
       
        $work_assignments =  Work_assignment::where('work_id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        // return view(
        //     'layouts.admin.teacher_work_schedule.update.update_work_assignment',
        //     ['work_assignments' => $work_assignments]
        // );

        return view(
            'layouts.admin.teacher_work_schedule.update.update_work_assignment',
            ['work_assignments' => $work_assignments]
        );
    }
}
