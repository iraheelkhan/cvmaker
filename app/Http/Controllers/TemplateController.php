<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Template;
use Session;
class TemplateController extends Controller
{
   public function __construct(){
       $this->middleware('auth');
   }

   public function list(){
		return view('template.templatedashboard');
	}
}
