<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     $user = Auth::user();

        //     if ($user->role === 'admin') {
        //         return redirect('/admin');
        //     } elseif ($user->role === 'penjahit') {
        //         return redirect('/penjahit');
        //     } elseif ($user->role === 'user') {
        //         return redirect('/pelanggan');
        //     }
        // }

        return $next($request);
    }
}
