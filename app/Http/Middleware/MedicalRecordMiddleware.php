<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MedicalRecordMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return $next($request); // Lanjutkan ke halaman formulir jika pengguna sudah login.
        }
    
        return redirect()->route('login'); // Redirect ke halaman login jika pengguna belum login.
    }

    protected $routeMiddleware = [
        // ...
        'medical_record' => \App\Http\Middleware\MedicalRecordMiddleware::class,
    ];
    
}
