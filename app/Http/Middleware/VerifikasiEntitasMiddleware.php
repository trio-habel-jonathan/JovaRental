<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifikasiEntitasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if (Auth::check()) {
            if ($user->role == 'mitra') {
                return redirect()->route('mitra.indexView');
            }

            if ($user and !$user->entitasPenyewa) {
                return redirect()->route('sewaSebagai');
            }
        }


        return $next($request);
    }
}
