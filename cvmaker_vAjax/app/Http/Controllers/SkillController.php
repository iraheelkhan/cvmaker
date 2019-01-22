<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Auth;
use Session;
class SkillController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('skill.firstskill');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$skill = new Skill;
   		$validated = $request->validate([	
   			"title" => 'required|max:50',
   			"level" => 'required|max:20',
   		]);
   		$skill->title= $request->title;
   		$skill->level= $request->level;
   		$skill->user_id= $userid;
   		$skill->save();

   		Session::flash('message', 'Step 6 - Skills Data Successfull Added'); 
   		return redirect('register/step7');

   	}

      public function list(){
         $id = Auth::user()->id;
         $skills = Skill::where('user_id', $id)->get();
         foreach ($skills as $skill) {
            if($skill->level == 5){
               $skill->level = "Excellent";
            }
            else if($skill->level == 4){
               $skill->level = "Fluent";
            }
            else if($skill->level == 2){
               $skill->level = "Good";
            }
            else if($skill->level == 1){
               $skill->level = "Undertanding";
            }
            else{
               $skill->level = "Farigh";
            }
         }
         return view('skill.showskill')->with('data', $skills);
      }

      public function add(){
         return view('skill.addskill');
      }
      public function addmore(Request $request)
      {
         $userid = Auth::user()->id;
         $skill = new Skill;
         $validated = $request->validate([   
            "title" => 'required|max:50',
            "level" => 'required|max:20',
         ]);
         $skill->title= $request->title;
         $skill->level= $request->level;
         $skill->user_id= $userid;
         $skill->save();

         Session::flash('message', 'Skills Data Successfull Added <script> swal("Success","Educational Data Successfully Add","success");</script>'); 
         return redirect('skill');

      }
      public function delete(Request $request){
        $id = $request->id;
        $skill = Skill::findorFail($id);
        if(Auth::user()->id === $skill->user_id){
            $skill->delete();
            Session::flash('message', 'Skill Data Deleted<script>swal("Deleted","Skill Deleted","warning");</script>'); 
            return redirect('skill');
        }
        Session::flash('message', 'Stop<script>swal("Hahaha","You are not Smart","error");</script>'); 
        return redirect('skill');
      }

      
}
