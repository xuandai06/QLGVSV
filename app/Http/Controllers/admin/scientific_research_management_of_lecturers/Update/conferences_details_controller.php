<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Conferences_detail;
use Illuminate\Http\Request;

class conferences_details_controller extends Controller
{
    public function index()
    {
        $conferences_details = Conferences_detail::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_conferences_details',
            ['$conferences_details' => $conferences_details]
        );
    }
}
