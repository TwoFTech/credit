<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est authentifié
        if (Auth::check() && Auth::user()->role != 'admin') {
            return redirect()->route('suivredemande.mesDemandes');
        }

        // Si non authentifié, redirige vers la page de connexion ou une autre page
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return $next($request);
    }

}
