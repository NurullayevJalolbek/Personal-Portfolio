<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\HomeSection;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $home_section = HomeSection::first();
        $about_me = AboutSection::first();

        return view('portfolio.portfolio', [
            'home_section' => $home_section,
            'about_section' => $about_me
        ]);
    }
}
