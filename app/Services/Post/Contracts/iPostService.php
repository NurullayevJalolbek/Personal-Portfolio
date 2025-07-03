<?php

namespace App\Services\Post\Contracts;

use Illuminate\Http\Request;

interface iPostService
{
    public function filter(Request $request);
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function delete($id);
}
