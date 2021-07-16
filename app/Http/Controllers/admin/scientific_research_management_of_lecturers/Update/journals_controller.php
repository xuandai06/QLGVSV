<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class journals_controller extends Controller
{
  public function index()
  {
    $journals = Journal::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_journals',
      ['$journals' => $journals]
    );
  }
}
