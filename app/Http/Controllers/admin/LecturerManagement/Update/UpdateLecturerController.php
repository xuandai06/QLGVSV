<?php

namespace App\Http\Controllers\Admin\LecturerManagement\Update;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
      'email' => 'required|email|unique:users,email',
      'name' => 'required',
      'birthday' => 'date',
      'hometown' => 'required',
      'phone_number' => 'numeric|min:9',
      'position_id' => 'required|exists:App\Models\Position,id',
      'level_id' => 'required|exists:App\Models\Level,id',
      'major_id' => 'required|exists:App\Models\Major,id',
      'password' => 'required|confirmed|min:6'
    ]);

    $user = new User();
    $user->id = $request->id;
    $user->email = $request->email;
    $user->role = 'lecturer';
    $user->password = Hash::make($request->password);
    $user->save();

    $lecturer = new Lecturer();
    $lecturer->id = $request->id;
    $lecturer->name = $request->name;
    $lecturer->sex = $request->sex;
    $lecturer->birthday = $request->birthday;
    $lecturer->hometown = $request->hometown;
    $lecturer->address = $request->address;
    $lecturer->phone_number = $request->phone_number;
    $lecturer->note = $request->name;
    $lecturer->position_id = $request->position_id;
    $lecturer->level_id = $request->level_id;
    $lecturer->major_id = $request->major_id;
    $lecturer->save();
    return redirect()->route('update/lecturers')->with('status', 'Thêm giảng viên thành công');
  }

  public function delete( Lecturer $lecturer)
  {
    $lecturer->delete();
    return redirect()->route('update/lecturers');
  }

  public function edit_index($id)
  {
     $lecturer = Lecturer::find($id);
    return view('layouts.admin.lecturer_management.update.edit.edit_lecturers', ['lecturer' => $lecturer]);
  }

  public function edit(Request $request, Lecturer $lecturer)
  {
    $request->validate([
      'email' => 'required|email',
      'name' => 'required',
      'birthday' => 'date',
      'phone_number' => 'numeric|min:9',
      'hometown' => 'required',
      'position_id' => 'required|exists:App\Models\Position,id',
      'level_id' => 'required|exists:App\Models\Level,id',
      'major_id' => 'required|exists:App\Models\Major,id',
    ]);
    $user = $lecturer->user;
    $user->email = $request->email;
    $user->save();

    $lecturer->name = $request->name;
    $lecturer->birthday = $request->birthday;
    $lecturer->phone_number = $request->phone_number;
    $lecturer->position_id = $request->position_id;
    $lecturer->level_id = $request->level_id;
    $lecturer->major_id = $request->major_id;
  
    $lecturer->save();
    return back()->with('status', 'Cập nhật thành thành công');
  }
  public function search(Request $request)
  {
      $lecturers =  Lecturer::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
      return view('layouts.admin.lecturer_management.update.update_lecturers', ['lecturers' => $lecturers]);
  }
}
