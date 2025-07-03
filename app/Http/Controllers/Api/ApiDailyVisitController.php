<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DailyVisit;
use Carbon\Carbon;

class ApiDailyVisitController extends Controller
{
    public function count(Request $request)
    {
        $visits = DailyVisit::selectRaw('DATE(date) as date, count(*) as total')
            ->groupBy('date')
            ->orderByDesc('date')
            ->take(7)
            ->get();

        return response()->json($visits);
    }

    public function weekly(Request $request)
    {
        // Oxirgi 7 kunning sanalari
        $dates = collect(range(0, 7))->map(function ($day) {
            return Carbon::now()->subDays(7 - $day)->format('d.m.y');
        });

        // Har bir sana bo‘yicha kirishlar sonini olish
        $visitCounts = $dates->map(function ($date) {
            $count = DailyVisit::whereDate('date', Carbon::createFromFormat('d.m.y', $date))->count();
            return $count;
        });

        // Natijani diagrammaga tayyorlash
        $series = [
            'name' => 'Foydalanuvchilar',
            'data' => $visitCounts->toArray(),
        ];

        return response()->json([
            'series' => [$series],
            'dates' => $dates->toArray(),
        ]);
    }
}
