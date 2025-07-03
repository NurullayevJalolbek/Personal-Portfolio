<?php

namespace App\Services\Statistic\Contracts;

use Illuminate\Http\Request;

interface iStatisticService
{
    public function dashboard(Request $request);
}
