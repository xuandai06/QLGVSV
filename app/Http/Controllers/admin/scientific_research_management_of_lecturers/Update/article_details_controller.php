<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Article_detail;
use Illuminate\Http\Request;

class article_details_controller extends Controller
{
    public function index()
    {
        $article_details = Article_detail::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_article_details',
            ['$article_details' => $article_details]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|unique:article_details,article_id|exists:App\Models\Article,id',
            'lecturer_id' => 'required|unique:article_details,lecturer_id|exists:App\Models\Lecturer,id',
            'role' => 'required',
        ]);

        $article_detail = new Article_detail();
        $article_detail->article_id = $request->article_id;
        $article_detail->lecturer_id = $request->lecturer_id;
        $article_detail->role = $request->role;
        $article_detail->save();
        return redirect()->route('update/article_details')->with('status', 'Thêm chi tiết bài báo thành công');
    }
}
