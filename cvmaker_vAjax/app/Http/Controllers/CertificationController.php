<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Certification;
class CertificationController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('certification.firstcertification');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$certification = new Certification;
   		$validated = $request->validate([	
   			"title" => 'required|max:100',
   			"institute" => 'required|max:200',
   			"year" => 'required|max:200',
   			"duration" => 'min:1',
   			"duration_prefix" => 'required|max:8',
   		]); 
   		$certification->title= $request->title;
   		$certification->year= $request->year;
   		$certification->institute= $request->institute;
   		$certification->duration_prefix= $request->duration_prefix;
   		$certification->duration = $request->duration;
   		$certification->user_id= $userid;
   		$certification->save();

   		Session::flash('message', 'Step 8 - Certification Data Successfull Added'); 
   		return redirect('dashboard');

   	}

      public function list(){
           $id = Auth::user()->id;
           $certification = Certification::where('user_id', $id)->get();
           //dd($education);
           return view('certification.showcertification')->with('data', $certification);
      }

      public function add(){
         return view('certification.addcertification');
      }

      public function addmore(Request $request)
      {
         $userid = Auth::user()->id;
         $user_email = Auth::user()->email;
         $certification = new Certification;
         $validated = $request->validate([   
            "title" => 'required|max:100',
            "institute" => 'required|max:200',
            "year" => 'required|max:200',
            "duration" => 'min:1',
            "duration_prefix" => 'required|max:8',
         ]); 
         $certification->title= $request->title;
         $certification->year= $request->year;
         $certification->institute= $request->institute;
         $certification->duration_prefix= $request->duration_prefix;
         $certification->duration = $request->duration;
         $certification->user_id= $userid;
         $certification->save();

         Session::flash('message', 'Certification Data Successfull Added <script> swal("Success","Certification Data Successfully Added","success");</script>'); 
         return redirect('certification');

      }

      public function edit(Request $request)
      {
           $id = $request->id;
           $certification = Certification::findorFail($id);
           return view('certification.editcertification')->with('data', $certification);
      }

      public function update(Request $request)
      {
         $id = $request->id;
         $userid = Auth::user()->id;
         $certification = Certification::findorFail($id);
         $validated = $request->validate([   
            "title" => 'required|max:100',
            "institute" => 'required|max:200',
            "year" => 'required|max:200',
            "duration" => 'min:1',
            "duration_prefix" => 'required|max:8',
         ]); 
         $certification->title= $request->title;
         $certification->year= $request->year;
         $certification->institute= $request->institute;
         $certification->duration_prefix= $request->duration_prefix;
         $certification->duration = $request->duration;
         $certification->user_id= $userid;
         $certification->save();

         Session::flash('message', 'Certification Data Successfull Updated <script> swal("Updated","Certification Data Successfully Updated","success");</script>'); 
         return redirect('certification');
      }

      public function delete(Request $request)
      {
           $id = $request->id;
           $certification = Certification::findorFail($id);
           $certification->delete();
            Session::flash('message', 'Certification Data   Deleted <script> swal("Deleted","Certification Data Deleted","warning");</script>'); 
           return redirect('certification');
      }
}
