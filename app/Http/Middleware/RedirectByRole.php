<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectByRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return $next($request);
        }

        $user = auth()->user();

        // Jika admin
        if ($user->role === 'admin') {

            // Jika bukan di halaman admin, redirect ke admin dashboard
            if (!$request->is('admin/*')) {
                return redirect()->route('admin.dashboard');
            }

        } 
        // Jika pelanggan
        else {

            // Jika bukan di halaman pelanggan, redirect ke pelanggan dashboard
            if (!$request->is('pelanggan/*')) {
                return redirect()->route('pelanggan.dashboard');
            }

        }

        return $next($request);
    }
}
