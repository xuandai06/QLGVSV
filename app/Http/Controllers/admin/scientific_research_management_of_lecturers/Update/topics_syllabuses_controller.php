<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Topics_syllabuses;
use Illuminate\Http\Request;

class topics_syllabuses_controller extends Controller
{
  public function index()
  {
    $topics_syllabuses = Topics_syllabuses::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_topics_syllabuses',
      ['topics_syllabuses' => $topics_syllabuses]
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:topics_syllabuses,id',
      'name' => 'required',
      'time' => 'required',
      'result' => 'required',
      'kind_of_science_id' => 'required',
      'implementation_id' => 'required',
    ]);

    $topics_syllabuses = new Topics_syllabuses();
    $topics_syllabuses->id = $request->id;
    $topics_syllabuses->name = $request->name;
    $topics_syllabuses->time = $request->time;
    $topics_syllabuses->result = $request->result;
    $topics_syllabuses->note = $request->note;
    $topics_syllabuses->kind_of_science_id = $request->kind_of_science_id;
    $topics_syllabuses->implementation_id = $request->implementation_id;
    $topics_syllabuses->save();
    return redirect()->route('update/topics_syllabuses')->with('status', 'Thêm cấp thực hiện thành công');
  }

  public function search(Request $request)
  {
    $topics_syllabuses =  Topics_syllabuses::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_topics_syllabuses', ['topics_syllabuses' => $topics_syllabuses]);
  }

  public function delete(Topics_syllabuses $topics_syllabuses)
  {
    $topics_syllabuses->delete();
    return redirect()->route('update/topics_syllabuses');
  }

  public function edit_index($id)
  {
    $topics_syllabuses = Topics_syllabuses::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_topics_syllabuses',
      ['topics_syllabuse' => $topics_syllabuses]
    );
  }

  public function edit(Request $request, Topics_syllabuses $topics_syllabuses)
  {
    $request->validate([
      'name' => 'required',
    ]);

    $topics_syllabuses->name = $request->name;
    $topics_syllabuses->name = $request->name;
    $topics_syllabuses->time = $request->time;
    $topics_syllabuses->result = $request->result;
    $topics_syllabuses->note = $request->note;
    $topics_syllabuses->kind_of_science_id = $request->kind_of_science_id;
    $topics_syllabuses->implementation_id = $request->implementation_id;
    $topics_syllabuses->save();
    return back()->with('status', 'Cập nhật loại khoa học thành công');
  }
}
