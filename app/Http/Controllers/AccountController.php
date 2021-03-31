<?php
namespace App\Http\Controllers;
use DB;
use Session;
use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use Illuminate\Support\Facades\Redirect;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Account::all();
        return view('admin.account.manage_account',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.account.add_account');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {   
        $input = $request->all();
		if($request->hasFile('account_image')){
            $destination_path = 'upload';
            $account_image = $request->file('account_image');
            $image_name = $account_image->getClientOriginalName();
            $path = $request->file('account_image')->move($destination_path,$image_name);
            $input['account_image'] = $image_name;
            // dd()
			// $add->update(['account_image' => $request->file('account_image')->store('upload')]);
		}
        Account::create($input);
        // dd($input);
        return Redirect()->route('MANAGEMENT_ACCOUNT')->with('message','Add new account successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($account_id)
    {
        $getId = Account::findOrFail($account_id);
        // dd($getId);
        return view('admin.account.edit_account',compact('getId'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountRequest $request, $account_id)
    {
        $account2 = Account::findOrFail($account_id);
        // $account2->update($request->all());
        $input = $request->all();
		if($request->hasFile('account_image')){
            $destination_path = 'upload';
            $account_image = $request->file('account_image');
            $image_name = $account_image->getClientOriginalName();
            $path = $request->file('account_image')->move($destination_path,$image_name);
            $input['account_image'] = $image_name;
		}
        $account2->update($input);
        return Redirect()->Route('MANAGEMENT_ACCOUNT')->with('message','Update account successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($account_id)
    {
        $delete = Account::Find($account_id);
        $delete->delete();
        return Redirect()->Route('MANAGEMENT_ACCOUNT')->with('message','Delete account successfully!');
    }
    public function loginAccount(){
        return view('loginaccount');
    }
    public function executeLoginAccount(Request $request){
        $data1 = $request->all();
        $account_email = $request->account_email;
        $account_password = $request->account_password;
        // $getNumberRole = DB::table('account')->select('account_number')->where('account_id', $account_id)->get();
        $check = DB::table('account')->where('account_email',$account_email)->where('account_password',$account_password)->first();
        if(($check==true)){
            if($check->account_number == 3){
                return Redirect()->Route('STUDENT');
            }elseif($check->account_number == 2){
                return Redirect()->Route('COORDINATOR');
                echo "Coordinator";
            }elseif($check->account_number == 1){
                echo "Guest";
            }elseif ($check->account_number == 4){
                return Redirect()->Route('MANAGER');
            }
        }else{
            return Redirect()->back()->with('message','Incorrect username or password!');
        }
        // dd($check);
    }
}
