<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Auth;
use Session;
class ExperienceController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('experience.firstexperience');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$experience = new Experience;
   		$validated = $request->validate([	
   			"company_name" => 'required|max:50|regex:/^[\pL\s\-]+$/u',
   			"description" => 'required|max:200',
   			"designation" => 'required|min:3|regex:/^[\pL\s\-]+$/u',
   			"from_date" => 'required',
   			"to_date" => 'required',
   		]);
   		$experience->company_name= $request->company_name;
   		$experience->description= $request->description;
   		$experience->designation= $request->designation;
   		$experience->title= $request->title;
   		$experience->from_date = $request->from_date;
   		$experience->to_date= $request->to_date;
   		$experience->user_id= $userid;
   		$experience->save();

   		Session::flash('message', 'Step 4 - Experience Data Successfull Added'); 
   		return redirect('register/step5');

   	}

      public function add(){
         return view('experience.addexperience');
      }

      public function list(){
         $id = Auth::user()->id;
         $education = Experience::where('user_id', $id)->get();
         //dd($education);
         return view('experience.showexperience')->with('data', $education);
      }
      public function addmore(Request $request)
      {
         $userid = Auth::user()->id;
         $user_email = Auth::user()->email;
         $experience = new Experience;
         $validated = $request->validate([   
            "company_name" => 'required|max:50',
            "description" => 'required|max:200',
            "designation" => 'required|min:3',
            "from_date" => 'required',
            "to_date" => 'required',
         ]);
         $experience->company_name= $request->company_name;
         $experience->description= $request->description;
         $experience->designation= $request->designation;
         $experience->title= $request->title;
         $experience->from_date = $request->from_date;
         $experience->to_date= $request->to_date;
         $experience->user_id= $userid;
         $experience->save();

         Session::flash('message', 'Experience Data Successfull Added'); 
         return redirect('experience');

      }

      public function delete(Request $request){
        $id = $request->degree_id;
        $experience = Experience::findorFail($id);
        if(Auth::user()->id === $experience->user_id){
           $experience->delete();
           Session::flash('message', 'Experience Data Deleted');
        } 
        return redirect('experience');
      }

      public function edit(Request $request){
         $id = $request->id;
         $experience = Experience::findorFail($id);
         if(Auth::user()->id === $experience->user_id){
            return view('experience.editexperience')->with('data', $experience);
         }
         return redirect('experience');
      }

      public function update(Request $request){
         $id = $request->id;
         $experience = Experience::findorFail($id);
         $validated = $request->validate([   
            "company_name" => 'required|max:50',
            "description" => 'required|max:200',
            "designation" => 'required|min:3',
            "from_date" => 'required',
            "to_date" => 'required',
         ]);
         $experience->company_name= $request->company_name;
         $experience->description= $request->description;
         $experience->designation= $request->designation;
         $experience->title= $request->title;
         $experience->from_date = $request->from_date;
         $experience->to_date= $request->to_date;
         $experience->save();

         Session::flash('message', 'Experience Data Successfull Added <script> swal("Success","Experience Successfully Updated","success");</script>'); 
         return redirect('experience');
      }
}
