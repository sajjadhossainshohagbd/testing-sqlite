<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::match(['GET', 'POST'],'/', function (Request $request) {

    if($request->isMethod('post')){
        $request->validate([
            'email' => 'required|unique:users,email',
        ]);
    }
    return view('welcome');
});
