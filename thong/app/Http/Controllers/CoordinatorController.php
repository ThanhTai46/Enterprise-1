<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Student;


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
        // $data = Account::all();
        return view('admin.coordinator.function.create_coordinator') ->with('faculity',$faculity);
    }

    public function storedCoordinator(Request $request)
    {
        DB::table('cordinator')->insert([
            'cordinator_name' => $request->namecoordinator,
            'cordinator_email' => $request->email,
            'cordinator_phone' => $request->phone,
            'cordinator_address' => $request->address,
            'faculity_name' => $request->faculty,
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
        
      
        return view('admin.coordinator.edit_cordinator' , compact('coordinator')) ->with('faculity',$faculity);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('cordinator')->where('cordinator_id', $id)->update([
            'cordinator_name' => $request->namecoordinator,
            'cordinator_email' => $request->email,
            'cordinator_phone' => $request->phone,
            'cordinator_address' => $request->address,
            'faculity_name' => $request->faculty,
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
    public function CoordinatorDashboard(){
        return view('coordinatorFE.dashboardCoordinator');
    }

    public function viewcontribution(){
        $student = DB::table('student')->get();
        
        //return $student;
        return view('coordinatorFE.function.view_contribution')->with('student', $student);
    }
    public function addcomment($id)
    {
        $addcomment = DB::table('student')->where('student_id', $id)->first();
        // dd($addcomment);
        return view('coordinatorFE.function.comment_contribution', compact('addcomment'));
    }



    // public function addcomment($id)
    // {
    //     $student = DB::table('Student')->get();
    //      $addcomment = DB::table('student')->where('student_id', $id)->first();
    //     $addcomment = DB::table('Student')->where('student_id', $id)->first();
        
    //     dd($addcomment);
    //     return view('coordinatorFE.function.view_contribution', compact('addcomment')) -> with('student',$student);
    // }

    public function addCommentProcess(Request $request , $id)
    {
        DB::table('student')->where('student_id', $id)
            ->update([
                'comment' => $request->comment,

            ]);
            
        return redirect('viewContribution')->with('status', 'Comment Successful!');

        //return redirect('viewContribution')->with('status', 'Profile updated!');

    }

}
