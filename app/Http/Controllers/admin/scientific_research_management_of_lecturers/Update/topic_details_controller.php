<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Topic_detail;
use Illuminate\Http\Request;

class topic_details_controller extends Controller
{
  public function index()
  {
    $topic_details = Topic_detail::paginate(10);
    
    
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_topic_details',
      ['topic_details' => $topic_details]
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'topic_syllabus_id' => 'required|unique:topic_details,topic_syllabus_id|exists:App\Models\Topic_syllabu,id',
      'lecturer_id' => 'required|unique:topic_details,lecturer_id|exists:App\Models\Lecturer,id',
      'role' => 'required',
    ]);

    $topic_details = new Topic_detail();
    $topic_details->id = $request->id;
    $topic_details->name = $request->name;
    $topic_details->time = $request->time;
    $topic_details->save();
    return redirect()->route('update/topic_details')->with('status', 'Thêm cấp thực hiện thành công');
  }

  public function search(Request $request)
  {
    $topic_details =  Topic_detail::where('topic_syllabus_id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_topic_details', ['topic_details' => $topic_details]);
  }

  public function delete(Topic_detail $topic_detail)
  {
    $topic_detail->delete();
    return redirect()->route('update/topic_details');
  }

  public function edit_index($id)
  {
    $topic_details = Topic_detail::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_topic_details',
      ['topic_details' => $topic_details]
    );
  }

  public function edit(Request $request, Topic_detail $topic_detail)
  {
    $request->validate([
      'topic_syllabus_id' => 'required|unique:topic_details,topic_syllabus_id|exists:App\Models\Topic_syllabu,id',
      'lecturer_id' => 'required|unique:topic_details,lecturer_id|exists:App\Models\Lecturer,id',
      'role' => 'required',
    ]);

    $topic_detail->topic_syllabus_id = $request->name;
    $topic_detail->lecturer_id = $request->name;
    $topic_detail->role = $request->time;
    $topic_detail->save();
    return back()->with('status', 'Cập nhật chi tiết đề tài/giáo trình thành công');
  }
}
