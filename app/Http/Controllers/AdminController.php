<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
class AdminController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }
    public function list()
    {   
        $this->authorize('only_admin');
    	$user = User::all();
    	return view('admin.userlistview')->with('data', $user);
    }

    public function delete(Request $request){
        $this->authorize('only_admin');
    	$id = $request->id;
    	$user_id = Auth::user()->id;
    	if($id == $user_id){
    		Session::flash('message', 'You cannot Delete yourself <script> swal("Erorr","What are you doing?","warning");</script>'); 
         return redirect('admin/user/list');
    	}
    	$data = User::findorFail($id);
    	$data->delete();
    	Session::flash('message', 'User Deleted <script> swal("Deleted","User Data Successfully Deleted","warning");</script>'); 
         return redirect('admin/user/list');
    }
}
