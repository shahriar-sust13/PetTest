<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileEditReq ;
use App\userProfile;
use App\UserImage;
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

            $userImage = new userImage();
            $userImage->userId = $uid;
            $userImage->imageId = 0;

            $userImage->save();

            $userProfile->currentProfileImagePath = $uid ; // Hudai ase

            $userProfile->save();
        }

        return redirect('home');
    }

    public function changePic(Request $request){
        $userId = \Auth::user()->id;

        if( $request->hasFile('img') ){
            $userImage = UserImage::where('userId', $userId)->first();
            $userImage->imageId = $userId;
            $userImage->save();

            $image = $request->file('img');
            $imageName = $userId . '.' . $image->getClientOriginalExtension();
            $image->move('images/profiles', $imageName);
        }

        return redirect('profile/'.$userId);
    }
}
