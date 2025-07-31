<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home_section = HomeSection::first();

        return view('portfolio.portfolio', [
            'home_section' => $home_section
        ]);
    }
}
