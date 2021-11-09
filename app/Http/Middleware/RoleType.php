<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if(! isset($user)) {
            if ($request->is('admin*')) {
                return redirect()->to('admin');
            } else if ($request->is('retailer*')) {
                return redirect()->to('retailer');
            } else if ($request->is('wholesaler*')) {
                return redirect()->to('wholesaler');
            }
        }


        return $next($request);
    }
}
