<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Update;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class UpdateResultController extends Controller
{
    public function index()
    {
      $results = Result::paginate(10);
      return view(
        'layouts.admin.teacher_work_schedule.update.update_result',
        ['results' => $results]
      );
    }

    public function store(Request $request)
    {
      $request->validate([
        'work_id' => 'unique:results,work_id',
        'status' => 'required',
      ]);
  
      $result = new Result();
      $result->work_id = $request->work_id;
      $result->status = $request->status;
      $result->note = $request->note;
      $result->save();
  
      return redirect()->route('update/results')->with('status', 'Thêm kết quả thành công')
      ->with('work_id',$request->work_id)
      ->with('status',$request->status)
      ->with('note',$request->note)
      ;
    }
  
    public function delete(Result $result)
    {
      $result->delete();
      return redirect()->route('update/results');
    }
  
    public function edit_index($work_id)
    {
      $result = Result::find($work_id);
     
      return view(
        'layouts.admin.teacher_work_schedule.update.edit.edit_results',['result' => $result]
      );
    }
  
    public function edit(Request $request, Result $result)
    {
  
      $request->validate([
        'status' => 'required',
      ]);
      
      $result->status = $request->status;
      $result->note = $request->note;
      $result->save();

      return back()->with('status', 'Cập nhật kết quả thành công');
    }
    public function search(Request $request)
    {
        $results =  Result::where('work_id', 'LIKE', '%' . $request->id . '%')->paginate(10);
         
        return view(
            'layouts.admin.teacher_work_schedule.update.update_result',
            ['results' => $results]
          );
    }

}
