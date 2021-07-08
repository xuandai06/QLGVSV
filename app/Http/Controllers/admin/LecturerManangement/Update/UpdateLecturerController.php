<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class UpdateLecturerController extends Controller
{
    public function index()
  {
    $lecturers = Lecturer::paginate(10);
    return view(
      'layouts.admin.lecturer_management.update.update_lecturers',
      ['lecturers' => $lecturers]
    );
  }
  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:lecturers,id',
      'name' => 'required',
      'birthday' => 'date',
      'phone_number' => 'numeric|min:9',
      'position_id' => 'required|exists:App\Models\Position,id',
      'level_id' => 'required|exists:App\Models\Level,id',
      'major_id' => 'required|exists:App\Models\Major,id'
    ]);

    $lecturer = new Lecturer();
    $lecturer->id = $request->id;
    $lecturer->name = $request->name;
    $lecturer->sex = $request->sex;
    $lecturer->hometown = $request->hometown;
    $lecturer->address = $request->address;
    $lecturer->phone_number = $request->phone_number;
    $lecturer->note = $request->name;
    $lecturer->position_id = $request->position_id;
    $lecturer->level_id = $request->level_id;
    $lecturer->major_id = $request->major_id;
    $lecturer->save();
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
