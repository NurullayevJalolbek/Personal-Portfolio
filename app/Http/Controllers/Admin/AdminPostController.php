<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Post\PostUpdateRequest;
use App\Services\Post\Contracts\iPostService;
use App\Enums\General\StatusStringEnum;
use App\Http\Requests\Post\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index(Request $request, iPostService $service)
    {
        $datas = $service->filter($request);
        $statuses = StatusStringEnum::list();

        return view('admin.posts.index', [
            'datas' => $datas,
            'statuses' => $statuses,
        ]);
    }

    public function create(iPostService $service)
    {
        $model = new Post();
        $statuses = StatusStringEnum::list();

        return view('admin.posts.create', [
            'model' => $model,
            'statuses' => $statuses,
        ]);
    }

    public function store(PostRequest $request, iPostService $service)
    {
        $service->store($request);
        return redirect()->route('admin.posts.index')
            ->withSuccess(__('message.Successfully created'));
    }

    public function edit(Post $Post)
    {
        $model = $Post;
        $statuses = StatusStringEnum::list();
        return view('admin.posts.edit', [
            'model' => $model,
            'statuses' => $statuses,
        ]);
    }

    public function update(PostUpdateRequest $request, Post $post, iPostService $service)
    {
        $service->update($request, $post->id);
        return redirect()->route('admin.posts.index')
            ->withSuccess(__('message.Successfully updated'));
    }

    public function destroy(Post $post, iPostService $service)
    {
        $service->delete($post->id);
        return success_response(__('message.Successfully deleted'));
    }
}

