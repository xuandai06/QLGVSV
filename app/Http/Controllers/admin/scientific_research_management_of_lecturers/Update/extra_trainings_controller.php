<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Extra_training;
use Illuminate\Http\Request;

class extra_trainings_controller extends Controller
{
    public function index()
    {
        $extra_trainings = Extra_training::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_extra_trainings',
            ['$extra_trainings' => $extra_trainings]
        );
    }
}
