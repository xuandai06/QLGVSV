<?php

namespace App\Http\Controllers\Admin\LecturerManagement\Update;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class UpdateLevelController extends Controller
{
    public function index()
    {
      $levels = Level::paginate(10);
      return view(
        'layouts.admin.lecturer_management.update.update_levels',
        ['levels' => $levels]
      );
    }

    public function store(Request $request)
    {
      $request->validate([
        'id' => 'required|unique:levels,id',
        'name' => 'required',
      ]);
  
      $levels = new Level();
      $levels->name = $request->name;
      $levels->id = $request->id;
      $levels->save();
  
      return redirect()->route('update/levels')->with('status', 'Thêm trình độ thành công');
    }
  
    public function delete(Level $level)
    {
      $level->delete();
      return redirect()->route('update/levels');
    }
  
    public function edit_index($id)
    {
      $level = Level::find($id);
      return view('layouts.admin.lecturer_management.update.edit.edit_levels', ['level' => $level]);
    }
  
    public function edit(Request $request, Level $level)
    {
  
      $request->validate([
        'name' => 'required',
      ]);
  
      $level->name = $request->name;
      $level->save();
      return back()->with('status', 'Cập nhật trình độ thành công');
    }
    public function search(Request $request)
    {
        $levels =  Level::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view('layouts.admin.lecturer_management.update.update_levels', ['levels' => $levels]);
    }
}
