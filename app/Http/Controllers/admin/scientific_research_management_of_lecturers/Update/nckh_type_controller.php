<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Kind_of_science;
use Illuminate\Http\Request;

class nckh_type_controller extends Controller
{
    public function index()
    {
      $kind_of_sciences = Kind_of_science::paginate(10);
      return view(
        'layouts.admin.scientific_research_management_of_lecturers.update.nckh_type',
        ['kind_of_sciences' => $kind_of_sciences]
      );
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:kind_of_sciences,id',
            'name' => 'required'
        ]);

        $unit = new Kind_of_science();
        $unit->id = $request->id;
        $unit->name = $request->name;
        $unit->save();
        return redirect()->route('update/nckh_type')->with('status', 'Thêm loại khoa học thành công');
    }
}
