<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    //
    public function index(){
        $user=DB::select('select * from new');
        return view('layout.user',compact('user'));
    }
}
