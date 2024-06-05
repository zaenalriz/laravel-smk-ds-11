<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class LoginPengguna
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // mengecek user sudah login atau belum
        if (Auth::check()) {
            // di lanjutkan ke halaman selanjutnya
            return $next($request);
            
        }
        return redirect()->route('login');
    }
}
