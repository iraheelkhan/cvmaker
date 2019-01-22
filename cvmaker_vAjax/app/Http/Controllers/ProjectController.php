<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Project;
use Session;
class ProjectController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('project.firstproject');
	}

	public function create(Request $request)
   	{
   		//loading model for the view
   		
   		$userid = Auth::user()->id;
   		$user_email = Auth::user()->email;
   		$project = new Project;
   		$validated = $request->validate([	
   			"project_title" => 'required|max:100',
   			"description" => 'required|max:200',
   			"duration" => 'min:1',
   			"details" => 'max:300',
   			"duration_prefix" => 'required|max:8',
			"company" => 'required|max:50',
   		]);
   		$project->company= $request->company;
   		$project->description= $request->description;
   		$project->title= $request->project_title;
   		$project->duration_prefix= $request->duration_prefix;
   		$project->duration = $request->duration;
   		$project->user_id= $userid;
   		$project->save();

   		Session::flash('message', 'Step 7 - Project Data Successfull Added'); 
   		return redirect('register/step8');

   	}

      public function list(){
           $id = Auth::user()->id;
           $project = Project::where('user_id', $id)->get();
           //dd($education);
           return view('project.showproject')->with('data', $project);
      }

      public function add(){
         return view('project.addproject');
      }

      public function addmore(Request $request)
      {
         $userid = Auth::user()->id;
         $user_email = Auth::user()->email;
         $project = new Project;
         $validated = $request->validate([   
            "project_title" => 'required|max:100',
            "description" => 'required|max:200',
            "duration" => 'min:1',
            "details" => 'max:300',
            "duration_prefix" => 'required|max:8',
         "company" => 'required|max:50',
         ]);
         $project->company= $request->company;
         $project->description= $request->description;
         $project->title= $request->project_title;
         $project->duration_prefix= $request->duration_prefix;
         $project->duration = $request->duration;
         $project->user_id= $userid;
         $project->save();

         Session::flash('message', 'Project Data Successfull Added <script> swal("Success","Project Data Successfully Added","success");</script>'); 
         return redirect('project');

      }

      public function edit(Request $request)
      {
           $id = $request->id;
           $project = Project::findorFail($id);
           return view('project.editproject')->with('data', $project);
      }

      public function update(Request $request)
      {
         $id = $request->id;
         $userid = Auth::user()->id;
         $project = Project::findorFail($id);
         $validated = $request->validate([   
            "project_title" => 'required|max:100',
            "description" => 'required|max:200',
            "duration" => 'min:1',
            "details" => 'max:300',
            "duration_prefix" => 'required|max:8',
         "company" => 'required|max:50',
         ]); 
         $project->company= $request->company;
         $project->description= $request->description;
         $project->title= $request->project_title;
         $project->duration_prefix= $request->duration_prefix;
         $project->duration = $request->duration;
         $project->user_id= $userid;
         $project->save();

         Session::flash('message', 'Project Data Successfull Updated <script> swal("Updated","Project Data Successfully Updated","success");</script>'); 
         return redirect('project');
      }
      public function delete(Request $request)
      {
           $id = $request->id;
           $project = Project::findorFail($id);
           $project->delete();
            Session::flash('message', 'Project Data Deleted <script> swal("Deleted","Project Data Deleted","warning");</script>'); 
           return redirect('project');
      }
}
