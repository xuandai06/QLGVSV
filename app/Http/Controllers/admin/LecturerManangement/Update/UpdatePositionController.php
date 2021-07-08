<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;

class UpdatePositionController extends Controller
{
    public function index()
    {
      $positions = Position::paginate(10);
      return view(
        'layouts.admin.lecturer_management.update.update_positions',
        ['positions' => $positions]
      );
    }

    public function store(Request $request)
    {
      $request->validate([
        'id' => 'required|unique:majors,id',
        'name' => 'required',
        'subject_id' => 'required|exists:App\Models\Subject,id'
      ]);
  
      $position = new Position();
      $position->name = $request->name;
      $position->id = $request->id;
      $position->subject_id = $request->subject_id;
      $position->save();
  
      return redirect()->route('update/positions');
    }
  
    public function delete(Position $position)
    {
      $position->delete();
      return redirect()->route('update/positions');
    }
  
    public function edit_index($id)
    {
      $position = Position::find($id);
      return view('layouts.admin.lecturer_management.update.edit.edit_positions', ['position' => $position]);
    }
  
    public function edit(Request $request, Position $position)
    {
  
      $request->validate([
        'name' => 'required',
        'subject_id' => 'required|exists:App\Models\Subject,id'
      ]);
  
      $position->name = $request->name;
      $position->subject_id = $request->subject_id;
      $position->save();
      return back()->with('status', 'Cập nhật bộ môn thành công');
    }
    public function search(Request $request)
    {
        $position =  Position::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view('layouts.admin.lecturer_management.update.update_subjects', ['positions' => $position]);
    }
}
