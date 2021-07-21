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
            ['article_details' => $article_details]
        );
    }

    public function store(Request $request)
    {
        $article_detail = Article_detail::where('article_id', '=', $request->article_id)
            ->where('lecturer_id', '=', $request->lecturer_id)->get();

        if ($article_detail->count() != 0) {
            return back()->with('error', 'Mã khoa học và mã giảng viên đã tồn tại')
                ->with('article_id', $request->article_id)
                ->with('lecturer_id', $request->lecturer_id)
                ->with('role', $request->role);
        }

        $article_detail = new Article_detail();
        $article_detail->article_id = $request->article_id;
        $article_detail->lecturer_id = $request->lecturer_id;
        $article_detail->role = $request->role;
        $article_detail->save();

        return redirect()->route('update/article_details')->with('status', 'Thêm chi tiết bài báo thành công')
            ->with('article_id', $request->article_id)
            ->with('lecturer_id', $request->lecturer_id)
            ->with('role', $request->role);
    }

    public function delete($article_id, $lecturer_id)
    {
        Article_detail::where('article_id', '=', $article_id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->delete();

        return redirect()->route('update/article_details');
    }

    public function edit_index($article_id, $lecturer_id)
    {
        $article_detail = Article_detail::where('article_id', '=', $article_id)
            ->where('lecturer_id', '=', $lecturer_id)->first();

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_article_details',
            ['article_detail' => $article_detail]
        );
    }

    public function edit(Request $request, $article_id, $lecturer_id)
    {

        Article_detail::where('article_id', '=', $article_id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->update(['role' => $request->role]);

        return back()->with('status', 'Cập nhật chi tiết bài báo thành công');
    }

    public function search(Request $request)
    {

        $article_details =  Article_detail::where('article_id', 'LIKE', '%' . $request->article_id . '%')->paginate(10);

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_article_details',
            ['article_details' => $article_details]
        );
    }
}
