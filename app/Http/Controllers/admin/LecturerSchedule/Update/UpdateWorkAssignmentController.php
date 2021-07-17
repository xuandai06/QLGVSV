<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Update;

use App\Http\Controllers\Controller;
use App\Models\Work_assignment;
use Illuminate\Http\Request;

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
        // $request->validate([
        //     'work_id' => 'required|exists:App\Models\works,id',
        //     'unit_id' => 'required|exists:App\Models\units,id',
        // ]);

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

    public function delete(Work $work)
    {
        $work->delete();
        return redirect()->route('update/works');
    }

    public function edit_index($id)
    {
        $work = Work::find($id);

        return view(
            'layouts.admin.teacher_work_schedule.update.edit.edit_works',
            ['work' => $work]
        );
    }

    public function edit(Request $request, Work $work)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $work->name = $request->name;
        $work->start_time = $request->start_time;
        $work->end_time = $request->end_time;
        $work->place = $request->place;
        $work->note = $request->note;

        $work->save();

        return back()->with('status', 'Cập nhật công việc thành công');
    }
    public function search(Request $request)
    {
        $works =  Work::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.update.update_works',
            ['works' => $works]
        );
    }
}
