<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class SemesterController extends Controller
{
    public function index()
    {
        $semester = DB::table('semester')->get();
        return view('admin.semester.dashboardSemester', compact( 'semester'));
    }
    public function add_semester()
    {
        return view('admin.semester.create_semester');
    }
    public function addSemesterProcess(Request $request)
    {
        DB::table('semester')->insert([
            'semester_name' => $request->semester,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate
        ]);
        return redirect('semester')->with('status', 'Create Semester Successful!');
    }
    public function deleteSemester($id)
    {
        DB::table('semester')->where('semester_id' , $id)->delete();
        return redirect('semester')->with('status', 'Delete Semester Successful!');
    }
}
