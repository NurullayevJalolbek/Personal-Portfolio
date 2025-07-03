<?php

namespace App\Services\Developer\Contracts;

use Illuminate\Http\Request;

interface iDeveloperService
{
    public function filter(Request $request);
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function delete($id);
}
