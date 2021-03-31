<?php
namespace App\Http\Controllers;
use DB;
use Session;
use App\Faculty;
use App\Account;
use App\Student;
use App\Semester;
use App\Statistic;
use App\Coordinator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ManagerController extends Controller
{
    public function ManagerDashboard(){
        $getDataStudent = Student::all()->where('active' ,'=', '1');
        $contribution = Student::all()->count();
        $semester = Semester::all()->count();
        $faculty = Faculty::all()->count();
        //get data from contribution IT
        $contributionIT = Student::all()->where('faculity_name' ,'=', 'Information Technology')->count(); 
        $contributionBS = Student::all()->where('faculity_name' ,'=', 'Business')->count();
         $contributionVV = Student::all()->where('faculity_name' ,'=', 'Vovinam')->count();
        $contributionDesign = Student::all()->where('faculity_name' ,'=', 'Design')->count();
        $contributionMarketing = Student::all()->where('faculity_name' ,'=', 'Marketing')->count();
        $coordinator = Coordinator::all()->count();
        $created = DB::table('student')
                ->whereYear('created_at', '2021')
                ->get()
                ->count();
        return view('marketing_manager.manager_dashboard', compact('getDataStudent', 'contribution' ,'semester','faculty','coordinator','contributionIT','contributionBS','contributionDesign' ,'contributionMarketing','contributionVV','created'));
       
    }
    public function ViewStatistics()
    {

        $getDataStudent = Student::all()->where('active' ,'=', '1');
        $contribution = Student::all()->count();
        $semester = Semester::all()->count();
        $faculty = Faculty::all()->count();
        //get data from contribution IT
        $contributionIT = Student::all()->where('faculity_name' ,'=', 'Information Technology')->count(); 
        $contributionBS = Student::all()->where('faculity_name' ,'=', 'Business')->count();
         $contributionVV = Student::all()->where('faculity_name' ,'=', 'Vovinam')->count();
        $contributionDesign = Student::all()->where('faculity_name' ,'=', 'Design')->count();
        $contributionMarketing = Student::all()->where('faculity_name' ,'=', 'Marketing')->count();
        $coordinator = Coordinator::all()->count();
        $created = DB::table('student')
                ->whereYear('created_at', '2021')
                ->get()
                ->count();
        return view('marketing_manager.function.statistics_contribution', compact('getDataStudent', 'contribution' ,'semester','faculty','coordinator','contributionIT','contributionBS','contributionDesign' ,'contributionMarketing','contributionVV','created'));
    }

    // public function filter_by_date(Request $request)
    // {
    //     //chart
    //     $data = $request->all();
    //     $from_date = $data['from_date'];
    //     $to_date = $data['to_date'];
    //     $get = Student::whereBetween('created_at',[$from_date,$to_date])->orderBy('created_at','ASC')->get();
    //     foreach ($get as $key => $val)
    //     {
    //         $chart_data[] = array(
    //             'period' => $val->created_at,
    //             'student' => $val->student_id,
    //             'uploadfile' => $val->student_uploadfile,
    //             'uploadimage' => $val->student_uploadimage,
    //             'faculty' => $val->faculty_name
    //         ); 
    //     }
    //     echo $data = json_encode($chart_data);
    // }
}
