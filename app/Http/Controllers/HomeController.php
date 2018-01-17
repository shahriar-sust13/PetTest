<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileEditReq ;
use App\userProfile;
use App\petImage;
use App\User;
use App\pet;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\InfoCheck;
use File ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkInfo');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile($profileId)
    {
        $data = NULL ;

        try
        {
            //$temp = User::findOrFail($profileId) ;
            // $data['name'] = $temp->name ;
            // return $temp->name ;
            $data['name'] = User::findOrFail($profileId)->name ;
        }

        catch(\Exception $ex)
        {
            return "Invlid Request ".$profileId ;
        }

        try
        {
            $temp = userProfile::where('userId',$profileId)->get();
            $data['fb'] = $temp[0]['facebookLink'] ;
            $data['twt'] = $temp[0]['TwitterLink'] ;
            $data['descr'] = $temp[0]['intro'] ;
            $data['imgId'] = $profileId ;
        }

        catch(\Exception $ex)
        {
            return "Something Wrong" ;
        }

        $pets = NULL ; 


        try
        {
            $pets = pet::where('userId',$profileId)->orderBy('id','desc')->paginate(8) ;

            foreach ($pets as $pet) {
                $pet['name'] = $pet->petName ;
                $pet['id'] = $pet->id ;
                $tp = petImage::where('petId',$pet->id)->firstOrFail() ;
                $pet['img'] = $tp->id ;
            }
        }

        catch(\Exception $ex)
        {
            return "Oh shit !!";
        }
//return $data ;
        return view('profile',compact('data','pets'));
    }
}
