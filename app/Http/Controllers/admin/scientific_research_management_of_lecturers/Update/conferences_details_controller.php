<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update;

use App\Http\Controllers\Controller;
use App\Models\Conferences_detail;
use Illuminate\Http\Request;

class conferences_details_controller extends Controller
{
    public function index()
    {
        $conferences_details = Conferences_detail::paginate(10);
        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_conferences_details',
            ['conferences_details' => $conferences_details]
        );
    }

    public function store(Request $request)
    {
        $conferences_detail = Conferences_detail::where('conference_id', '=', $request->conference_id)
            ->where('lecturer_id', '=', $request->lecturer_id)->get();

        if ($conferences_detail->count() != 0) {
            return back()->with('error', 'Mã khoa học và mã giảng viên đã tồn tại')
                ->with('conference_id', $request->conference_id)
                ->with('lecturer_id', $request->lecturer_id)
                ->with('role', $request->role);
        }

        $conferences_detail = new Conferences_detail();
        $conferences_detail->conference_id = $request->conference_id;
        $conferences_detail->lecturer_id = $request->lecturer_id;
        $conferences_detail->role = $request->role;
        $conferences_detail->save();

        return redirect()->route('update/conferences_details')->with('status', 'Thêm chi tiết hội nghị hội thảo thành công')
            ->with('conference_id', $request->conference_id)
            ->with('lecturer_id', $request->lecturer_id)
            ->with('role', $request->role);
    }

    public function delete($conference_id, $lecturer_id)
    {
        Conferences_detail::where('conference_id', '=', $conference_id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->delete();

        return redirect()->route('update/conferences_details');
    }

    public function edit_index($conference_id, $lecturer_id)
    {
        $conferences_detail = Conferences_detail::where('conference_id', '=', $conference_id)
            ->where('lecturer_id', '=', $lecturer_id)->first();

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.edit.edit_conferences_details',
            ['conferences_detail' => $conferences_detail]
        );
    }

    public function edit(Request $request, $conference_id, $lecturer_id)
    {

        Conferences_detail::where('conference_id', '=', $conference_id)
            ->where('lecturer_id', '=', $lecturer_id)
            ->update(['role' => $request->role]);

        return back()->with('status', 'Cập nhật chi tiết hội nghị hội thảo thành công');
    }

    public function search(Request $request)
    {

        $conferences_details =  Conferences_detail::where('conference_id', 'LIKE', '%' . $request->conference_id . '%')->paginate(10);

        return view(
            'layouts.admin.scientific_research_management_of_lecturers.update.update_conferences_details',
            ['conferences_details' => $conferences_details]
        );
    }
}
