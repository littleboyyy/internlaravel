<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use DB;

class UserController extends Controller
{
    //
    public function index(){
        //$user=DB::select('select * from new');
        return view('admin.main',['user'=> $this->getSessionUser(),]);
    }
    public function create(){
        //$user=DB::select('select * from new');
        return view('admin.createuser');
    }
    public function getSessionUser(){
        return collect(Session::get('user'));
    }
    public function store(StoreRequest $request){
        //dd($request->all());
        
        Session::push('user', $request->all());
        return redirect()->back()->with('massage','correct');
        
       }
       
}