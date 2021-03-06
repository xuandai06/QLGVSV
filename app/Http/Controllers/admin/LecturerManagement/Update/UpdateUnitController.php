<?php

namespace App\Http\Controllers\Admin\LecturerManagement\Update;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Unique;

class UpdateUnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(10);
        return view('layouts.admin.lecturer_management.update.update_units', ['units' => $units]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:units,id',
            'name' => 'required'
        ]);

        $unit = new Unit;
        $unit->id = $request->id;
        $unit->name = $request->name;
        $unit->save();
        return redirect()->route('update/units')->with('status', 'Thêm đơn vị thành công');
    }

    public function delete(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('update/units');
    }

    public function edit_index($id)
    {
        $unit = Unit::find($id);
        return view(
            'layouts.admin.lecturer_management.update.edit.edit_units',
            ['unit' => $unit]
        );
    }

    public function edit(Request $request, Unit $unit)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $unit->name = $request->name;
        $unit->save();
        return back()->with('status', 'Cập nhật đơn vị thành công');
    }

    public function search(Request $request)
    {
        $units =  Unit::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view('layouts.admin.lecturer_management.update.update_units', ['units' => $units]);
    }
}
