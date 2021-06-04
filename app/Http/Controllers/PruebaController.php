<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;

class PruebaController extends Controller
{
    public function index(){
        return view('prueba');
    }

    public function store(PageRequest $request){
        dd($request->all());
    }
}
