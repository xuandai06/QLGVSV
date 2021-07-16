<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class journals_controller extends Controller
{
  public function index()
  {
    $journals = Journal::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_journals',
      ['journals' => $journals]
    );
  }

  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:journals,id',
      'name' => 'required',
      'score' => 'required',
    ]);

    $journal = new Journal();
    $journal->id = $request->id;
    $journal->name = $request->name;
    $journal->score = $request->score;
    $journal->save();
    return redirect()->route('update/journals')->with('status', 'Thêm tạp trí thành công');
  }

  public function delete(Journal $journal)
  {
    $journal->delete();
    return redirect()->route('update/journals');
  }

  public function edit_index($id)
  {
    $journal = Journal::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_journals',
      ['journal' => $journal]
    );
  }

  public function edit(Request $request, Journal $journal)
  {
    $request->validate([
      'name' => 'required',
      'score' => 'required',
    ]);

    $journal->name = $request->name;
    $journal->score = $request->score;
    $journal->save();
    return back()->with('status', 'Cập nhật tạp trí thành công');
  }

  public function search(Request $request)
  {
    $journals =  Journal::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_journals', ['journals' => $journals]);
  }
}
