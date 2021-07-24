<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Topic_detail;
use App\Models\Topics_syllabuse;
use Dotenv\Validator;
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
    $topic = Topic_detail::where('topic_syllabus_id', '=', $request->topic_syllabus_id)
      ->where('lecturer_id', '=', $request->lecturer_id)->get();

    if ($topic->count() != 0) {
      return back()->with('error', 'Mã khoa học và mã giảng viên đã tồn tại')
        ->with('topic_syllabus_id', $request->topic_syllabus_id)
        ->with('lecturer_id', $request->lecturer_id)
        ->with('role', $request->role);
    }

    $topic_detail = new Topic_detail();
    $topic_detail->topic_syllabus_id = $request->topic_syllabus_id;
    $topic_detail->lecturer_id = $request->lecturer_id;
    $topic_detail->role = $request->role;
    $topic_detail->save();

    return redirect()->route('update/topic_details')->with('status', 'Thêm chi tiết công việc thành công')
      ->with('topic_syllabus_id', $request->topic_syllabus_id)
      ->with('lecturer_id', $request->lecturer_id)
      ->with('role', $request->role);
  }

  public function delete($topic_syllabus_id, $lecturer_id)
  {
    Topic_detail::where('topic_syllabus_id', '=', $topic_syllabus_id)
      ->where('lecturer_id', '=', $lecturer_id)
      ->delete();

    return redirect()->route('update/topic_details');
  }

  public function edit_index($topic_syllabus_id, $lecturer_id)
  {
    $topic_detail = Topic_detail::where('topic_syllabus_id', '=', $topic_syllabus_id)
      ->where('lecturer_id', '=', $lecturer_id)->first();

    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_topic_details',
      ['topic_detail' => $topic_detail]
    );
  }

  public function edit(Request $request, $topic_syllabus_id, $lecturer_id)
  {

    Topic_detail::where('topic_syllabus_id', '=', $topic_syllabus_id)
      ->where('lecturer_id', '=', $lecturer_id)
      ->update(['role' => $request->role]);

    return back()->with('status', 'Cập nhật chi tiết đề tài/giáo trình thành công');
  }

  public function search(Request $request)
  {

    $topic_details =  Topic_detail::where('topic_syllabus_id', 'LIKE', '%' . $request->topic_syllabus_id . '%')->paginate(10);

    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_topic_details',
      ['topic_details' => $topic_details]
    );
  }
}
