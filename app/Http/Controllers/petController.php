<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pet ;
use App\userProfile ;
use App\petImage ;
use App\User ;

class petController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkInfo');
    }

    public function petProfile($petId)
    {
    	$pet = NULL ;

    	try
    	{
    		$temp = pet::findOrFail($petId);
    		$pet['name'] = $temp->petName ;
    		$pet['author'] = $temp->userId ;
    		$pet['dsctn'] = $temp->petDescription ;
    		$pet['ctg'] = $temp->category ;
    		$pet['price'] = $temp->price ;
    		$temp = petImage::where('petId',$petId)->firstOrFail();
    		$pet['img'] = $temp->id ;
    		$temp = userProfile::where('userId',$pet['author'])->firstOrFail();
    		$pet['Aimg'] = $temp->currentProfileImagePath ;
    		$pet['Amobile'] = $temp->mobileNo ;
    		$pet['Aname'] = User::findOrFail($pet['author'])->name ;
    	}
    	catch(\Exception $ex)
    	{
    		return "O o o No !";
    	}

    	//return $pet ;

    	return view('pet',compact('pet'));
    }
}
