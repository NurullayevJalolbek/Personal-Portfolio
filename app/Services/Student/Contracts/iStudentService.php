<?php

namespace App\Services\Student\Contracts;

use Illuminate\Http\Request;

interface iStudentService
{
    public function filter(Request $request);
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function delete($id);
}
