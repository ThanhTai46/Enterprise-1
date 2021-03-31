<?php
namespace App\Http\Controllers;
use DB;
use Session;
use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class FaculityController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data(){

    }
    public function manage_faculity()
    {
        $faculity = DB::table('faculity')->get();
        //return view('admin.faculity.manage_faculty',['faculity' => $faculity] );
        return view('admin.faculity.manage_faculity')->with('faculity',$faculity);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $data = Account::all();
        // foreach($data as $thong){
        //     $hihi = $data->account_id;
        // // }
        // dd($hihi);
        return view('admin.faculity.create_faculity',compact('data'));
    }
    public function addProcess(Request $request)
    {
        DB::table('faculity')->insert([
            'faculity_name' => $request->namefaculty,
            'faculity_description' => $request->description,
            'account_email' => $request->email
        ]);
        return redirect()->route('MANAGEMENT_FACULITY')->with('status', 'Created Faculty Successful!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculity = DB::table('faculity')->where('faculity_id', $id)->first();
        return view('admin.faculity.edit_faculity' , compact('faculity'));
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('faculity')->where('faculity_id', $id)->update([
            'faculity_name' => $request->namefaculty,
            'faculity_description' => $request->description
        ]);
         return redirect()->route('MANAGEMENT_FACULITY')->with('status', 'Updated Faculty Successful!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('faculity')->where('faculity_id', $id)->delete();
        return redirect()->route('MANAGEMENT_FACULITY')->with('status', 'Delete Faculty Successful!');
    }
}
