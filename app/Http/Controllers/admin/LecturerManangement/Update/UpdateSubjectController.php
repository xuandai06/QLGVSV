<?php

namespace App\Http\Controllers\Admin\LecturerManangement\Update;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Unit;
use Illuminate\Http\Request;

class UpdateSubjectController extends Controller
{
    public function store(Request $request){
      $unit = Unit::where('id',$request->unit_id)->get();
      if(!$unit->count()){
        return back()->with('status','Mã đơn vị không tồn tại');
      }
      return $unit;
    }
}
