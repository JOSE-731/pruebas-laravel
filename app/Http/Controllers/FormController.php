<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(PageRequest $request){
        
       //Lo que trae el request
        dd($request->all());

    }
}
