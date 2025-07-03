<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Models\DailyVisit;
use Carbon\Carbon;
use Closure;

class CountDailyVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $today = Carbon::now()->format('Y-m-d');
        $ip = $request->ip();

        DailyVisit::firstOrCreate([
            'date' => $today,
            'ip_address' => $ip
        ]);

        return $next($request);
    }
}
