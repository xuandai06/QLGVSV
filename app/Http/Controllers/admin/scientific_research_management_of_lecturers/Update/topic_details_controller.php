<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Topic_details;
use Illuminate\Http\Request;

class topic_details_controller extends Controller
{
    public function index()
    {
      $topic_details = Topic_details::paginate(10);
      return view(
        'layouts.admin.scientific_research_management_of_lecturers.update.update_topic_details',
        ['$topic_details' => $topic_details]
      );
    }
}
