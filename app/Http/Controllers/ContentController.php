<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContentAreaRepository;
use App\Repositories\ContentRepository;
use App\Models\Content;
use App\Http\Requests\ValidationClass;

class ContentController extends Controller
{

    public function show(ContentRepository $contentRepo, ContentAreaRepository $contentAreaRepo, int $id)
    {
        $contents = $contentRepo->content_by_area($id);
        $content_area = $contentAreaRepo->find($id);

        return view('admin.contents.list', compact('contents','content_area'));                                      
    }

    public function create(ValidationClass $request, ContentRepository $contentRepo)
    {
        $request->validated();
        $contentRepo->create_new_content($request);   

        return back()->with('success','New block added');
    }

    public function edit(ContentRepository $contentRepo, int $id)
    {
        $content = $contentRepo->find($id);

        return view('admin.contents.edit' , ['content' => $content]);
    }

    public function update(ContentRepository $contentRepo, Request $request)
    {
        $contentRepo->update_content($request, $request->input('id'));

        return back()->with('success','Edited correctly');
    }

    public function delete(ContentRepository $contentRepo, int $id) 
    {
        $contentRepo->delete($id);

        return back()->with('success','Removed correctly');
    }

}
