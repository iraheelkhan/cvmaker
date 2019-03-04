<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use Auth;
use Session;
class LanguageController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
   }

   public function first(){
		return view('language.firstlanguage');
	}

	public function create(Request $request)
   	{
   		$userid = Auth::user()->id;
   		$language = new Language;
   		$validated = $request->validate([	
   			"name" => 'required|max:50|regex:/^[\pL\s\-]+$/u',
   			"level" => 'required|max:20',
   		]);
   		$language->name= $request->name;
   		$language->level= $request->level;
   		$language->user_id= $userid;
   		$language->save();

   		Session::flash('message', 'Step 5 - Languages Data Successfull Added'); 
   		return redirect('register/step6');

   	}

      public function add(){
         return view('language.addlanguage');
      }

      public function delete(Request $request){
        $id = $request->id;
        $language = Language::findorFail($id);
        if(Auth::user()->id === $language->user_id){
          $language->delete();
          Session::flash('message', 'Language Data Deleted<script>swal("Deleted","Language Deleted","warning");</script>'); 
        }
        return redirect('language');
      } 

      public function list(){
         $id = Auth::user()->id;
         $language = Language::where('user_id', $id)->get();
         foreach ($language as $lang) {
            if($lang->level == 5){
               $lang->level = "Excellent";
            }
            else if($lang->level == 4){
               $lang->level = "Fluent";
            }
            else if($lang->level == 2){
               $lang->level = "Good";
            }
            else if($lang->level == 1){
               $lang->level = "Undertanding";
            }
            else{
               $lang->level = "Farigh";
            }
         }
         return view('language.showlanguage')->with('data', $language);
      }

      public function addmore(Request $request)
      {
         $userid = Auth::user()->id;
         $language = new Language;
         $validated = $request->validate([   
            "name" => 'required|max:50',
            "level" => 'required|max:20',
         ]);
         $language->name= $request->name;
         $language->level= $request->level;
         $language->user_id= $userid;
         $language->save();

         Session::flash('message', 'Languages Data Successfull Added<script>swal("Added","Language Added","success");</script>'); 
         return redirect('language');
      }


}
