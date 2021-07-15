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
}
