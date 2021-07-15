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
}
