<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Personal;
use App\User;
use Session;
class PersonalController extends Controller
{
    public function __construct(){
    	 $this->middleware('auth');
    }

    public function index(){
    }

	public function first(){
        $id = Auth::user()->id;
        $personal = Personal::where('user_id', $id)->get();
        if(count($personal) >0){
            return $this->list();
        }
		return view('personal.firstpersonal');
	}

    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $personal = new Personal;
        $validated = $request->validate([
            //"user_id" => 'unique:personals',  
            "firstname" => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            "lastname" => 'required|max:25|regex:/^[\pL\s\-]+$/u',
            "address" => 'required|max:100',
            "address2" => 'max:100',
            "city" => 'max:50|regex:/^[\pL\s\-]+$/u',
            "age" => 'max:3',
            "postalcode" => 'max:50',
            "country" => 'max:50|regex:/^[\pL\s\-]+$/u',
            "phone" => 'digits:11|numeric',
            "dob" => 'required|before:2005',
            "website" => 'required',
            "objective" => 'required|max:300',
        ]);
        $personal->first_name= $request->firstname;
        $personal->last_name= $request->lastname;
        $personal->address_1= $request->address;
        $personal->address_2= $request->address2;
        $personal->city_name= $request->city;
        $personal->country= $request->country;
        $personal->postal_code = $request->postalcode;
        $personal->phone= $request->phone;
        $personal->age= $request->age;
        $personal->date_of_birth= $request->dob;
        $personal->website= $request->website;
        $personal->objective= $request->objective;
        $personal->email = $user_email;
        $personal->user_id = $user_id;
        $personal->save();

        Session::flash('message', 'Step 1 - Personal Data Successfull Added'); 
        return redirect('register/step3');

    }

    public function list(){
        $id = Auth::user()->id;
        $personal = Personal::where('user_id', $id)->first();
        return view('personal.showpersonal')->with('data', $personal);
    }

    public function edit(){
        $id = Auth::user()->id;
        $personal = Personal::where('user_id', $id)->first();
        return view('personal.editpersonal')->with('data', $personal);
    }
   
   	public function update(Request $request)
   	{
   		$user_id = Auth::user()->id;

        $id = $request->personal_id;
   		$user_email = Auth::user()->email;
   		$personal = Personal::findorFail($id);
   		$validated = $request->validate([
   		  "firstname" => 'required|max:25|regex:/^[\pL\s\-]+$/u',
        "lastname" => 'required|max:25|regex:/^[\pL\s\-]+$/u',
        "address" => 'required|max:100',
        "address2" => 'max:100',
        "city" => 'max:50|regex:/^[\pL\s\-]+$/u',
        "age" => 'max:3',
        "postalcode" => 'max:50',
        "country" => 'max:50|regex:/^[\pL\s\-]+$/u',
   			"phone" => 'digits:12|numeric',
   			"dob" => 'required|before:2005',
   			"website" => 'required',
   			"objective" => 'required|max:300',
   		]);
   		$personal->first_name= $request->firstname;
   		$personal->last_name= $request->lastname;
   		$personal->address_1= $request->address;
   		$personal->address_2= $request->address2;
        $personal->city_name= $request->city;
   		$personal->country= $request->country;
   		$personal->postal_code = $request->postalcode;
   		$personal->phone= $request->phone;
   		$personal->age= $request->age;
   		$personal->date_of_birth= $request->dob;
   		$personal->website= $request->website;
   		$personal->objective= $request->objective;
   		$personal->email = $user_email;
   		$personal->user_id = $user_id;
   		$personal->save();
        $fullname = $request->firstname." ".$request->lastname;
        $user = User::findorFail($user_id);
        $user->name = $fullname;
        $user->save();

   		Session::flash('message', 'Personal Data Successfull Updated<script> swal("Updated","Personal Data Successfull Updated","success");</script>'); 
   		return redirect('personal');

   	}
   	
}
