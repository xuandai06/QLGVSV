<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class articles_controller extends Controller
{
  public function index()
  {
    $articles = Article::paginate(10);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.update_articles',
      ['articles' => $articles]
    );
  }
  
  public function store(Request $request)
  {
    $request->validate([
      'id' => 'required|unique:articles,id',
      'name' => 'required',
      'detail' => 'required',
      'time' => 'required',
      'journal_id' => 'required|exists:App\Models\Journal,id',
    ]);

    $article = new Article();
    $article->id = $request->id;
    $article->name = $request->name;
    $article->detail = $request->detail;
    $article->note = $request->note;
    $article->time = $request->time;
    $article->journal_id = $request->journal_id;
    $article->save();
    return redirect()->route('update/articles')->with('status', 'Thêm bài báo thành công');
  }

  public function search(Request $request)
  {
    $articles =  Article::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_articles', ['articles' => $articles]);
  }

  public function delete(Article $article)
  {
    $article->delete();
    return redirect()->route('update/articles');
  }

  public function edit_index($id)
  {
    $article = Article::find($id);
    return view(
      'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_articles',
      ['article' => $article]
    );
  }

  public function edit(Request $request, Article $article)
  {
    $request->validate([
      'name' => 'required',
      'detail' => 'required',
      'time' => 'required',
      'journal_id' => 'required|exists:App\Models\Journal,id',
    ]);

    $article->name = $request->name;
    $article->detail = $request->detail;
    $article->note = $request->note;
    $article->time = $request->time;
    $article->journal_id = $request->journal_id;
    $article->save();
    return back()->with('status', 'Cập nhật đề tài/giáo trình thành công');
  }
}
