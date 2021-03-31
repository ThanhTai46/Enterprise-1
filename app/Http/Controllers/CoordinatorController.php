<?php
namespace App\Http\Controllers;
use App\Account;
use App\Student;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class CoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        //
    }
    public function manage_coordinator()
    {
        $coordinator = DB::table('cordinator')->get();
        //return view('admin.faculity.manage_faculty',['faculity' => $faculity] );
        return view('admin.coordinator.manage_coordinator')->with('coordinator',$coordinator);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $faculity = DB::table('faculity')->get();
        $data = Account::all();
        // dd($data);
        return view('admin.coordinator.create_coordinator',compact('data'))->with('faculity',$faculity);
    }
    public function storedCoordinator(Request $request)
    {
        DB::table('cordinator')->insert([
            'cordinator_name' => $request->namecoordinator,
            'cordinator_email' => $request->email,
            'cordinator_phone' => $request->phone,
            'faculity_name' => $request->faculity_name,
        ]);
        return redirect('management_coordinator')->with('status', 'Add Coordinator Successful!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculity = DB::table('faculity')->get();
        $coordinator = DB::table('cordinator')->where('cordinator_id', $id)->first();
        $data = Account::all();
        return view('admin.coordinator.edit_cordinator' , compact('coordinator','data')) ->with('faculity',$faculity);
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('cordinator')->where('cordinator_id', $id)->update([
            'cordinator_name' => $request->namecoordinator,
            'cordinator_email' => $request->email,
            'cordinator_phone' => $request->phone,
            'faculity_name' => $request->faculity_name,
        ]);
         return redirect('management_coordinator')->with('status', 'Update Coordinator Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        DB::table('cordinator')->where('cordinator_id', $id)->delete();
        return redirect('management_coordinator')->with('status', 'Delete Coordinator Successful!');

    }
    // public function contributions()
    // {
    //     return view ('admin.contributions.index');
    // }

    // public function comment()
    // {
    //     return view ('admin.contributions.comment');
    // }
    // Coordinator Front End Function
    public function CoordinatorDashboard(Request $request){
        // $getImageCoordinator = DB::table('account')->get();
        // dd($getImageCoordinator);
        $getImageCoordinator = Account::all();
        // $getEmail = $request->input('account_email');
        // dd($getEmail);
        // $image = $getImageCoordinator->account_id;
        // dd($image);
        return view('coordinatorFE.dashboardCoordinator',compact('getImageCoordinator'));
    }
    public function viewcontribution(){
        $getImageCoordinator = Account::all();
        $getData = Student::all()->where('active' ,'=', '1');
        // $getStudentId = Student::find($student_id);
        // dd($getData);
        return view('coordinatorFE.function.view_contribution',compact('getData','getImageCoordinator'));
    }
    public function executecomment(Request $request){
        // $getData = Student::all();
        // $getStudentId = Student::where('student_id',$getData['student_id'])->get();
        // dd($getStudentId);
        // $data = $request->all();
        $setCmt123 = new Comment;
        $setCmt123->comment = $request->comment;
        $setCmt123->student_uploadfile = $request->student_uploadfile;
        $setCmt123->student_id = $request->student_id;
        $setCmt123->comment = $request->comment;
        $setCmt123->grade =  $request->grade;
        $setCmt123->save();
    }
    //Làm tiếp phần duyệt bài viết
    public function review_post()
    {
        $getImageCoordinator = Account::all();
        $data = Student::all()->where('active','=', '0');
        return view('coordinatorFE.function.Review_contribution',compact('data','getImageCoordinator'));
    }
    public function delete_post($id)
    {
        DB::table('student')->where('student_id', $id)->delete();
        return redirect('review')->with('status', 'Delete Post Successful!');

    }
    public function publish_post($id)
    {
        $check = DB::table('student')
        ->where('student_id' , $id)
        ->update(['active' => '1']);
        return redirect('review')->with('message', 'Publish Post  Successful!');
    }
}
