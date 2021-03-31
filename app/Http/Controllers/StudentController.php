<?php
namespace App\Http\Controllers;
use DB;
use Mail;
use Session;
use App\Account;
use App\Comment;
use App\Student;
use App\Semester;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Redirect;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getImageStudent = Account::all();
        $getDataStudent = Student::all()->where('active' ,'=', '1');
        $data = Student::all();
        return view('student.function.show',compact('data','getDataStudent','getImageStudent'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester_id = \Route::current()->Parameter('id'); // 
        $getImageStudent = Account::all();
        $semester =  Semester::all()->where('semester_id', $semester_id); 
        $faculity = DB::table('faculity')->get();
        $getDataStudent = Student::all()->where('active' ,'=', '1');
        return view('student.function.upload_file', compact('faculity','getDataStudent','getImageStudent') )->with('semester' , $semester);
    }
    public function viewSemester()
    {

        $getImageStudent = Account::all();
        $getDataStudent = Student::all()->where('active' ,'=', '1');
        $semester = Semester::all();
        return view ('student.function.viewSemester',compact('getDataStudent','getImageStudent','semester'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $add = new Student;
        // $add1 = new Comment;
        if($request->file('student_uploadimage')){
            $destination_path1 = 'imageStudent';
            $student_uploadimage = $request->file('student_uploadimage');
            $image = $student_uploadimage->getClientOriginalName();
            $request->student_uploadimage->move($destination_path1,$image);
            $add->student_uploadimage = $image;
        }
        if($request->file('student_uploadfile')){
            $destination_path = 'uploadfile';
            $student_uploadfile = $request->file('student_uploadfile');
            $filename = $student_uploadfile->getClientOriginalName();
            $request->student_uploadfile->move($destination_path,$filename);
            $add->student_uploadfile = $filename;
        }
        // $created_at = $now;
        $add->student_description = $request->student_description;
        $add->faculity_name = $request->faculity_name;
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $add->created_at = now();
        //$add1->student_uploadfile = $filename;
        // dd($add1);
        $getId = Account::all();
        foreach($getId as $getIds){
            $getRoles = $getIds->account_number;
            // dd($getRoles);
            if($getRoles == 3){
                $getEmailStudent = $getIds->account_email;
                // dd($getEmailStudent);
            }
        }
        $title_mail = "Student Upload".' '.$now;
        $link_comment = url('comment');
        $data = array("title_mail"=>$title_mail,"body"=>$link_comment,'email'=>$getEmailStudent); //body of mail.blade.php
        Mail::send('student.mail.mailtoCoordinator', ['data'=>$data] , function($message) use ($title_mail,$data){
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'],$title_mail);
        });
        $add->save();
        //$add1->save();
        return Redirect()->Route('SHOW_UPLOAD')->with('message','Upload File Successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student_id)
    {
        $getId =  Student::find($student_id);
        return view('student.function.edit',compact('getId'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $student_id)
    {
        $student = Student::find($student_id);
        $input = $request->all();
        if($request->file('student_uploadimage')){
            $destination_path1 = 'imageStudent';
            $student_uploadimage = $request->file('student_uploadimage');
            $image = $student_uploadimage->getClientOriginalName();
            $request->student_uploadimage->move($destination_path1,$image);
            $input['student_uploadimage'] = $image;
        }
        if($request->file('student_uploadfile')){
            $destination_path = 'uploadfile';
            $student_uploadfile = $request->file('student_uploadfile');
            $filename = $student_uploadfile->getClientOriginalName();
            $request->student_uploadfile->move($destination_path,$filename);
            $input['student_uploadfile'] = $filename;
        }
        // $created_at = $now;
        $input['student_description'] = $request->student_description;
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $input['updated_at'] = now();
        $student->update($input);
        // dd($student);
        return Redirect()->Route('SHOW_UPLOAD')->with('message','Update Your Upload Successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function StudentDashboard(){
        // $getDataStudent = Student::all()->where('active' ,'=', '1');
        $getDataStudent = Student::all();
        $getImageStudent = Account::all();
        // $getDataStudent1 = Student::all();
        // $getStudentId = Student::find($student_id);
        // dd($getData);
        return view('student.dashboardStudent',compact('getDataStudent','getImageStudent'));
       
    }
    public function checkGrade(){
        $getImageStudent = Account::all();
        $getDataStudent = Student::all();
        $data1 = Comment::all();
        return view('student.function.grade',compact('data1','getDataStudent','getImageStudent'));
    }
}
