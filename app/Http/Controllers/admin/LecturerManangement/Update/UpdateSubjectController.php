<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Unit;
use Illuminate\Http\Request;

class UpdateSubjectController extends Controller
{

  public function index()
  {
    $subjects = Subject::paginate(10);
    return view(
      'layouts.admin.lecturer_management.update.update_subjects',
      ['subjects' => $subjects]
    );
  }
  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:subjects,id',
      'name' => 'required',
    ]);
    $unit = Unit::where('id', $request->unit_id)->get();
    if ($unit->count() == 0) {
      return back()->with('status', 'Mã đơn vị không tồn tại');
    }

    $subject = new Subject();
    $subject->name = $request->name;
    $subject->id = $request->id;
    $subject->unit_id = $request->unit_id;
    $subject->save();

    return redirect()->route('update/subjects');
  }

  public function delete(Subject $subject)
  {
    $subject->delete();
    return redirect()->route('update/subjects');
  }

  public function edit_index($id)
  {
    $subject = Subject::find($id);
    return view('layouts.admin.lecturer_management.update.edit.edit_subjects', ['subject' => $subject]);
  }
  public function edit_index2(Subject $subject)
  {
    return view('layouts.admin.lecturer_management.update.edit.edit_subjects', ['subject' => $subject]);
  }

  public function edit(Request $request, Subject $subject)
  {

    $request->validate([
      'name' => 'required',
      'unit_id' => 'required'
    ]);
    if(!Unit::find($request->unit_id)){
      return back()->with('status', 'not found unit id');
    }

    $subject->name = $request->name;
    $subject->unit_id = $request->unit_id;
    $subject->save();
    return redirect()->route('update/subjects');
  }
}
