<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Topic_detail;
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
    $request->validate([
      'topic_syllabus_id' => [
        'required',
        function($attribute, $value, $fail){
        
        }

      ],
      
    ]);
  //   $request = [
  //     'topic_syllabus_id' => 'required|unique:topic_details,topic_syllabus_id',
  //     'lecturer_id' => 'required|unique:topic_details,lecturer_id',
  //     // 'user_id' => 'required|unique:service_details,user_id',
  //     // 'service_id'=>'required|unique:service_details,service_id'
  //  ];

<<<<<<< Updated upstream
  //  Validator::make($request)->passes();

//   $rules = [
//     'topic_syllabus_id' => 'required|unique:topic_details,topic_syllabus_id',
//     'lecturer_id' => 'required|unique:topic_details,lecturer_id',
//  ];
    
    $topic_detail = new Topic_detail();
    $topic_detail->topic_syllabus_id = $request->topic_syllabus_id;
    $topic_detail->lecturer_id = $request->lecturer_id;
=======
    $topic_detail = new Topic_detail();
    $topic_detail->id = $request->id;
    $topic_detail->name = $request->name;
>>>>>>> Stashed changes
    $topic_detail->role = $request->role;
    $topic_detail->save();
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

    $topic_detail->topic_syllabus_id = $request->topic_syllabus_id;
    $topic_detail->lecturer_id = $request->lecturer_id;
    $topic_detail->role = $request->role;
    $topic_detail->save();
    return back()->with('status', 'Cập nhật chi tiết đề tài/giáo trình thành công');
  }
}
