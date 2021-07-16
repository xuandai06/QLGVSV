<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Article_detail;
use Illuminate\Http\Request;

class article_details_controller extends Controller
{
    public function index()
    {
        $article_details = Article_detail::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_article_details',
            ['$article_details' => $article_details]
        );
    }
}
