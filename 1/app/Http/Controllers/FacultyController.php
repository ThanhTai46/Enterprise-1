<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class FacultyController extends Controller
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
    public function manage_faculty()
    {
        $faculity = DB::table('faculity')->get();
        
        //return view('admin.faculity.manage_faculty',['faculity' => $faculity] );
        return view('admin.faculity.manage_faculty')->with('faculity',$faculity);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        // $data = Account::all();
        return view('admin.faculity.create_faculty');
    }

    public function addProcess(Request $request)
    {
        DB::table('faculity')->insert([
            'Faculity_name' => $request->namefaculty,
            'Faculity_description' => $request->description
        ]);
        return redirect('management_faculty')->with('status', 'Add Faculty Successful!');
    }

   

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculity = DB::table('faculity')->where('Faculity_id', $id)->first();
      
        return view('admin.faculity.edit_faculty' , compact('faculity'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('faculity')->where('Faculity_id', $id)->update([
            'Faculity_name' => $request->namefaculty,
            'Faculity_description' => $request->description
        ]);
         return redirect('management_faculty')->with('status', 'Update Faculty Successful!');
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
        DB::table('faculity')->where('Faculity_id', $id)->delete();
        return redirect('management_faculty')->with('status', 'Delete Faculty Successful!');

    }
}
