<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('telescope:clear', function () {
    $this->error('telescope:clear command is blocked.');
})->describe('This command is blocked.');
