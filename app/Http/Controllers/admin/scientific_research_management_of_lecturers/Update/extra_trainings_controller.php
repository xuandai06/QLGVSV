<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Extra_training;
use Illuminate\Http\Request;

class extra_trainings_controller extends Controller
{
    public function index()
    {
        $extra_trainings = Extra_training::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_extra_trainings',
            ['extra_trainings' => $extra_trainings]
        );
    }

    public function store(Request $request)
    {
        $extra_training = Extra_training::where('id', '=', $request->id)
            ->where('lecturer_id', '=', $request->lecturer_id)->get();

        if ($extra_training->count() != 0) {
            return back()->with('error', 'Mã bồi dưỡng và mã giảng viên đã tồn tại')
                ->with('id', $request->id)
                ->with('lecturer_id', $request->lecturer_id)
                ->with('name', $request->name)
                ->with('specialization', $request->specialization)
                ->with('place', $request->place)
                ->with('start_time', $request->start_time)
                ->with('end_time', $request->end_time)
                ->with('result', $request->result)
                ->with('note', $request->note);
        }

        $extra_training = new Extra_training();
        $extra_training->id = $request->id;
        $extra_training->lecturer_id = $request->lecturer_id;
        $extra_training->name = $request->name;
        $extra_training->specialization = $request->specialization;
        $extra_training->place = $request->place;
        $extra_training->start_time = $request->start_time;
        $extra_training->end_time = $request->end_time;
        $extra_training->result = $request->result;
        $extra_training->note = $request->note;
        $extra_training->save();

        return redirect()->route('update/extra_trainings')->with('status', 'Thêm danh mục bồi dưỡng thành công')
            ->with('id', $request->id)
            ->with('lecturer_id', $request->lecturer_id)
            ->with('name', $request->name)
            ->with('specialization', $request->specialization)
            ->with('place', $request->place)
            ->with('start_time', $request->start_time)
            ->with('end_time', $request->end_time)
            ->with('result', $request->result)
            ->with('note', $request->note);
    }

    public function delete($id, $lecturer_id)
    {
        Extra_training::where('id', '=', $id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->delete();

        return redirect()->route('update/extra_trainings');
    }

    public function edit_index($id, $lecturer_id)
    {
        $extra_training = Extra_training::where('id', '=', $id)
            ->where('lecturer_id', '=', $lecturer_id)->first();

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_extra_trainings',
            ['extra_training' => $extra_training]
        );
    }

    public function edit(Request $request, $id, $lecturer_id)
    {

        Extra_training::where('id', '=', $id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->update(['name' => $request->name,'specialization' => $request->specialization,
            'place' => $request->place, 'start_time' => $request->start_time, 'end_time' => $request->end_time,
            'result' => $request->result,'note' => $request->note]);

        return back()->with('status', 'Cập nhật danh mục bồi dưỡng thành công');
    }

    public function search(Request $request)
    {

        $extra_trainings =  Extra_training::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_extra_trainings',
            ['extra_trainings' => $extra_trainings]
        );
    }
}
