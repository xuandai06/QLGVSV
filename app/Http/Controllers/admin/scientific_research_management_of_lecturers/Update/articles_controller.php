<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class articles_controller extends Controller
{
    public function index()
  {
    $articles = Articles::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_articles',
      ['$articles' => $articles]
    );
  }
}
