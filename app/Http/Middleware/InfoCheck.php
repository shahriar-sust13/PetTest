<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\userProfile;
use League\Flysystem\Exception;

class InfoCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $uid = Auth::user()->id ;

        try
        {
            $userProfile = userProfile::where('userId' , $uid)->firstOrFail();
        }

        catch(\Exception $ex)
        {
            return redirect('infoForm');
        }

        return $next($request);
    }
}
