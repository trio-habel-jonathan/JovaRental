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

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->asMitra) {
                return redirect()->route('mitra.indexView');
            }

            if ($user->entitasPenyewa && $request->route()->named('sewaSebagai')) {
                return redirect()->route('home');
            }

            if ($user->entitasPenyewa) {
                return $next($request);
            }
        }
        return $next($request);
    }
}
