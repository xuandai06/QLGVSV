<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Position;
use Illuminate\Http\Request;

class UpdateMajorController extends Controller
{
     public function index()
  {
    $majors = Major::paginate(10);
    return view(
      'layouts.admin.lecturer_management.update.update_majors',
      ['majors' => $majors]
    );
  }
  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:majors,id',
      'name' => 'required',
      'subject_id' => 'required|exists:App\Models\Subject,id'
    ]);

    $majors = new Major();
    $majors->name = $request->name;
    $majors->id = $request->id;
    $majors->subject_id = $request->subject_id;
    $majors->save();

    return redirect()->route('update/majors');
  }

  public function delete(Major $major)
  {
    $major->delete();
    return redirect()->route('update/majors');
  }

  public function edit_index($id)
  {
    $major = Major::find($id);
    return view('layouts.admin.lecturer_management.update.edit.edit_majors', ['major' => $major]);
  }

  public function edit(Request $request, Major $major)
  {

    $request->validate([
      'name' => 'required',
      'subject_id' => 'required|exists:App\Models\Subject,id'
    ]);

    $major->name = $request->name;
    $major->subject_id = $request->subject_id;
    $major->save();
    return back()->with('status', 'Cập nhật ngành thành công');
  }
  public function search(Request $request)
  {
      $majors =  Major::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
      return view('layouts.admin.lecturer_management.update.update_majors', ['majors' => $majors]);
  }
}
