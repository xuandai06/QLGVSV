<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Update;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Http\Request;

class UpdateWorkController extends Controller
{
    public function index()
    {
      $works = Work::paginate(10);
      return view(
        'layouts.admin.teacher_work_schedule.update.update_works',
        ['works' => $works]
      );
    }

    public function store(Request $request)
    {
      $request->validate([
        'id' => 'required|unique:works,id',
        'name' => 'required',
      ]);
  
      $work = new Work();
      $work->name = $request->name;
      $work->id = $request->id;
      $work->start_time = $request->start_time;
      $work->end_time = $request->end_time;
      $work->place = $request->place;
      $work->note = $request->note;
      $work->save();
  
      return redirect()->route('update/works')->with('status', 'Thêm công việc thành công')
      ->with('id',$request->id)
      ->with('name',$request->name)
      ->with('start_time',$request->start_time)
      ->with('name',$request->end_time)
      ->with('place',$request->place)
      ->with('note',$request->note)
      ;
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
        'layouts.admin.teacher_work_schedule.update.edit_works',['works' => $work]
      );
    }
  
    public function edit(Request $request, Work $work)
    {
  
      $request->validate([
        'name' => 'required',
      ]);
  
      $work->name = $request->name;
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
