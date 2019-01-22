<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function list()
    {
    	$user = User::all();
    	return view('admin.userlistview')->with('data', $user);
    }
}
