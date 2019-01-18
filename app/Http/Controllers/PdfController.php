<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Education;
use App\Personal;
use App\Experience;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
class PdfController extends Controller
{
	public function __construct(){
       $this->middleware('auth');
   	}
   	
    public function viewpdf(){
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
		$personal = Personal::where('user_id', $id)->get();
		$education = Education::where('user_id', $id)->get();
		$experience = Experience::where('user_id', $id)->get();
		$data = Skill::where('user_id', $id)->get();
		return view('testtemplate.index')->with('data', $data)->with('skills', $skills)->with('educations', $education)->with('personals', $personal)->with('experiences', $experience);
  	}

  	public function viewcheck()
  	{	
  		return view('testtemplate.index');
  	}
	public function export_pdf()
	{
		$id = Auth::user()->id;
		$skills = Skill::where('user_id', $id)->get();
		// $pdf = PDF::loadView('skill.showskill')->with('data', $skills);
		$pdf = PDF::loadHTML($this->viewpdf());
		$pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
		//$pdf->save(storage_path().'_filename.pdf');
		return $pdf->stream();
		//return view('skill.showskill')->with('data', $skills);
	}
}
