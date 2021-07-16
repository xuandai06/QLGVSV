<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class conferences_controller extends Controller
{
    public function index()
    {
        $conferences = Conference::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_conferences',
            ['$conferences' => $conferences]
        );
    }
}
