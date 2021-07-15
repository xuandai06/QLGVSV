<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Implementation_level;
use Illuminate\Http\Request;

class implementation_levels_controller extends Controller
{
  public function index()
  {
    $implementation_levels = Implementation_level::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_implementation_levels',
      ['implementation_levels' => $implementation_levels]
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:implementation_levels,id',
      'name' => 'required'
    ]);

    $implementation_level = new Implementation_level();
    $implementation_level->id = $request->id;
    $implementation_level->name = $request->name;
    $implementation_level->save();
    return redirect()->route('update/update_implementation_levels')->with('status', 'Thêm cấp thực hiện thành công');
  }

  public function delete(Implementation_level $implementation_levels)
  {
    $implementation_levels->delete();
    return redirect()->route('update/update_implementation_levels');
  }

  public function edit_index($id)
  {
    $implementation_levels = Implementation_level::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_implementation_levels',
      ['implementation_levels' => $implementation_levels]
    );
  }

  public function edit(Request $request, Implementation_level $implementation_levels)
  {
    $request->validate([
      'name' => 'required',
    ]);

    $implementation_levels->name = $request->name;
    $implementation_levels->save();
    return back()->with('status', 'Cập nhật cấp thực hiện thành công');
  }

  public function search(Request $request)
  {
    $implementation_levels =  Implementation_level::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_implementation_levels', ['implementation_levels' => $implementation_levels]);
  }
}
