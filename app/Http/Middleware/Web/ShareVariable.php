<?php

namespace App\Http\Middleware\Web;


use App\Models\User;
use Closure;

class ShareVariable
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
        $user   = @User::all();
        // $setting            = @Setting::whereIn('key', ['name', 'email', 'phone', 'whatsapp', 'address', 'gmaps', 'logo', 'logo_gray', 'icon', 'ogimage', 'pixel', 'analytics', 'file'])->get();
        // $SocialMedia        = @SocialMedia::all();
        // $about              = @Setting::key(Setting::ABOUT)->locale('id')->first()->json_value;

        view()->share(compact('user'));
        // view()->share(compact('setting'));
        // view()->share(compact('SocialMedia'));
        // view()->share(compact('about'));

        return $next($request);
    }
}
