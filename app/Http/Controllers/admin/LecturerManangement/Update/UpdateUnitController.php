<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class UpdateUnitController extends Controller
{   
    public function index(){
        $units = Unit::paginate(2);
        return view('layouts.admin.lecturer_management.update.update_unit',['units' => $units]);
    }
    public function store(Request $request){
        $request->validate([
            'id' => 'required|unique:units,id',
            'name'=> 'required'
        ]);
        $unit = new Unit;
        $unit->id = $request->id;
        $unit->name = $request->name;
        $unit->save();
        return back();
    }
}
