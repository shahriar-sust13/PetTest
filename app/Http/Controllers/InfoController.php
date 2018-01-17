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

class InfoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profileInfoForm()
    {
        $uid = Auth::user()->id ;

        try
        {
            $userProfile = userProfile::where('userId' , $uid)->firstOrFail();
            return redirect()->back();
        }

        catch(\Exception $ex)
        {
        }
        return view('profile-info-form');
    }

    public function profileInfoFormEdit(profileEditReq $req)
    {
        //return $req ;
        $uid = Auth::user()->id ;

        try
        {
            $userProfile = userProfile::where('userId' , $uid)->firstOrFail();
        }

        catch(\Exception $ex)
        {
            $userProfile = new userProfile();

            $userProfile->intro = $req->aboutMe ;
            $userProfile->facebookLink = $req->facebook ;
            $userProfile->TwitterLink = $req->twitter ;
            $userProfile->userId = $uid ;
            $userProfile->mobileno = $req->mobileno ;

            $new_path = "".$uid.".jpg" ;

            if($file = $req->file('img'))
                $file->move('images/profiles',$new_path);
            else
            {
                $new_path = 'images/profiles/'.$new_path ;
                File::copy('images/profiles/0.jpg',$new_path);
            }

            $userProfile->currentProfileImagePath = $uid ;
            $userProfile->save();
        }

        return redirect('home');
    }
}
