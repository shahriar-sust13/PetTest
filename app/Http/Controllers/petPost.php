<?php

namespace App\Http\Controllers;

use App\pet ;
use Illuminate\Http\Request;
use App\Http\Requests\petPostReq;
use Illuminate\Support\Facades\Auth;

class petPost extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postForm()
    {
    	return view('post');
    }

    public function postAdd(petPostReq $req)
    {
    	$pet = new pet ;
    	$pet->petDescription = $req->description ;
    	$pet->category = $req->postType ;
    	$pet->petName = $req->title ;
    	$pet->petType = $req->petType ;
    	$pet->userId = Auth::user()->id ;
    	$pet->price = $req->price ;

    	$pet->save();

    	return view('home') ;
    }
}
