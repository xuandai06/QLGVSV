<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Kind_of_science;
use Illuminate\Http\Request;

class update_kind_of_sciences_controller extends Controller
{
  public function index()
  {
    $kind_of_sciences = Kind_of_science::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_kind_of_sciences',
      ['kind_of_sciences' => $kind_of_sciences]
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:kind_of_sciences,id',
      'name' => 'required'
    ]);

    $kind_of_science = new Kind_of_science();
    $kind_of_science->id = $request->id;
    $kind_of_science->name = $request->name;
    $kind_of_science->save();
    return redirect()->route('update/kind_of_sciences')->with('status', 'Thêm loại khoa học thành công');
  }

  public function delete(Kind_of_science $kind_of_science)
  {
    $kind_of_science->delete();
    return redirect()->route('update/kind_of_sciences');
  }

  public function edit_index($id)
  {
    $kind_of_science = Kind_of_science::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_kind_of_sciences',
      ['kind_of_science' => $kind_of_science]
    );
  }

  public function edit(Request $request, Kind_of_science $kind_of_science)
  {
    $request->validate([
      'name' => 'required',
    ]);

    $kind_of_science->name = $request->name;
    $kind_of_science->save();
    return back()->with('status', 'Cập nhật loại khoa học thành công');
  }

  public function search(Request $request)
  {
    $kind_of_sciences =  Kind_of_science::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_kind_of_sciences', ['kind_of_sciences' => $kind_of_sciences]);
  }
}
