<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UpdateUnitController extends Controller
{
    public function store(Request $request){
        $unit = new Unit;
        $unit->id = $request->id;
        $unit->name = $request->name;
        $unit->save();
        return back();
    }
}
