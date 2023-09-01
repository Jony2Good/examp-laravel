<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $id)
    {
        $data = $request->validated();

        $this->service->update($id, $data);

        return redirect()->route('post.show', $id->id);
    }

}
