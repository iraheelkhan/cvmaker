<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Education;
class EducationController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }
   public function first(){
		return view('education.firsteducation');
	}

   public function create(Request $request)
      {
         $userid = Auth::user()->id;
         $user_email = Auth::user()->email;
         $education = new Education;
         $validated = $request->validate([   
            "title" => 'required|regex:/^[\pL\s\-]+$/u|max:50',
            "description" => 'required|max:200',
            "passing_year" => 'required|numeric',
            "marks" => 'required|between:0,99.99',
            "institute" => 'max:100|regex:/^[\pL\s\-]+$/u',
            "from_date" => 'required',
            "to_date" => 'required',
         ]);
         $education->name= $request->title;
         $education->description= $request->description;
         $education->passing_year= $request->passing_year;
         $education->marks_percentage= $request->marks;
         $education->institute= $request->institute;
         $education->from_date = $request->from_date;
         $education->to_date= $request->to_date;
         $education->user_id= $userid;
         $education->save();

         Session::flash('message', 'Step 3 - Educational Data Successfull Added'); 
         return redirect('register/step4');

      }

   public function list(){
        $id = Auth::user()->id;
        $education = Education::where('user_id', $id)->get();
        return view('education.showeducation')->with('Data', $education);
   }

   public function add(){
        return view('education.addeducation');
   }

    public function addmore(Request $request)
    {
         $userid = Auth::user()->id;
         $user_email = Auth::user()->email;
         $education = new Education;
         $validated = $request->validate([   
            "title" => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            "description" => 'required|max:200',
            "passing_year" => 'required|min:1950|max:2100|numeric',
            "marks" => 'required|min:10|max:100|numeric',
            "institute" => 'max:100|regex:/^[\pL\s\-]+$/u',
            "from_date" => 'required',
            "to_date" => 'required',
         ]);
         $education->name= $request->title;
         $education->description= $request->description;
         $education->passing_year= $request->passing_year;
         $education->marks_percentage= $request->marks;
         $education->institute= $request->institute;
         $education->from_date = $request->from_date;
         $education->to_date= $request->to_date;
         $education->user_id= $userid;
         $education->save();

         Session::flash('message', 'Educational Data Successfull Added <script> swal("Added","Educational Data Successfully Added","success");</script>'); 
         return redirect('education');

    }

    public function delete(Request $request){
        $id = $request->degree_id;
        $education = Education::findorFail($id);
        if(Auth::user()->id === $education->user_id){
            $education->delete();
            Session::flash('message', 'Educational Data Deleted');
        }    
        return redirect('education');
    }

    public function edit(Request $request){

        $id = $request->id;
        $education = Education::findorFail($id);
        if(Auth::user()->id === $education->user_id){
            return view('education.editeducation')->with('data', $education);
        }
        return redirect('education');
    }

    public function update(Request $request)
    {
        $id = $request->id;
         $education = Education::findorFail($id);
         $validated = $request->validate([   
            "name" => 'required|max:50',
            "description" => 'required|max:200',
            "passing_year" => 'required|min:1950|max:2100|numeric',
            "marks" => 'required|min:10|max:100|numeric',
            "institute" => 'max:100',
            "from_date" => 'required',
            "to_date" => 'required',
         ]);
         $education->name= $request->name;
         $education->description= $request->description;
         $education->passing_year= $request->passing_year;
         $education->marks_percentage= $request->marks;
         $education->institute= $request->institute;
         $education->from_date = $request->from_date;
         $education->to_date= $request->to_date;
         $education->save();

         Session::flash('message', 'Educational Data Successfull Added <script> swal("Success","Educational Data Successfully Edited","success");</script>'); 
         return redirect('education');

    }

}
