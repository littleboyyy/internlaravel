<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        //$user=DB::select('select * from new');
        return view('admin.main');
    }
}
