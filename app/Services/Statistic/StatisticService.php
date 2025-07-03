<?php

namespace App\Services\Statistic;

use App\Services\Statistic\Contracts\iStatisticService;
use Illuminate\Http\Request;

class StatisticService implements iStatisticService
{
    public $statistics;

    public function dashboard(Request $request)
    {
        return null;
    }
}
