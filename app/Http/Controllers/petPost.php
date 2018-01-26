<?php

namespace App\Http\Controllers;

use App\pet ;
use App\petImage ;
use File ;
use Illuminate\Http\Request;
use App\Http\Requests\petPostReq;
use Illuminate\Support\Facades\Auth;

class petPost extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkInfo');
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
        if( $req->postType == 3 ){
            $pet->price = $req->price;
        }
        else{
            $pet->price = 0;
        }

    	$pet->save();

        $pImage = new petImage ;
        $pImage->petId = $pet->id ;
        $pImage->save();

        $new_path = "".$pImage->id.".jpg" ;

        if($req->hasFile('img')){
            $file = $req->file('img') ;
            $file->move('images/pets/',$new_path);
        }
        else
        {
            $new_path = 'images/pets/'.$new_path ;
            File::copy('images/pets/0.jpg',$new_path);
            //return "ok" ;
        }

    	return redirect('/home') ;
    }
}
