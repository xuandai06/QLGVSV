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
            ['conferences' => $conferences]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:conferences,id',
            'name' => 'required',
            'time' => 'required',
            'place' => 'required',
            'implementation_level_id' => 'required|exists:App\Models\Implementation_level,id',
        ]);

        $conference = new Conference();
        $conference->id = $request->id;
        $conference->name = $request->name;
        $conference->time = $request->time;
        $conference->place = $request->place;
        $conference->note = $request->note;
        $conference->implementation_level_id = $request->implementation_level_id;
        $conference->save();
        return redirect()->route('update/conferences')->with('status', 'Thêm danh mục hội nghị/hội thảo thành công');
    }

    public function search(Request $request)
    {
        $conferences =  Conference::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        return view('layouts.admin.scientific_research_management_of_lecturers.update.update_conferences', ['conferences' => $conferences]);
    }

    public function delete(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('update/conferences');
    }

    public function edit_index($id)
    {
        $conference = Conference::find($id);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_conferences',
            ['conference' => $conference]
        );
    }

    public function edit(Request $request, Conference $conference)
    {
        $request->validate([
            'name' => 'required',
            'time' => 'required',
            'place' => 'required',
            'implementation_level_id' => 'required|exists:App\Models\Implementation_level,id',
        ]);

        $conference->name = $request->name;
        $conference->time = $request->time;
        $conference->place = $request->place;
        $conference->note = $request->note;
        $conference->implementation_level_id = $request->implementation_level_id;
        $conference->save();
        return back()->with('status', 'Cập nhật hội nghị/hội thảo thành công');
    }
}
