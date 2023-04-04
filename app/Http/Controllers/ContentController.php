<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContentAreaRepository;
use App\Repositories\ContentRepository;
use App\Models\Content;

class ContentController extends Controller
{

    public function show(ContentRepository $contentRepo,ContentAreaRepository $contentAreaRepo, $id)
    {
        $contents = $contentRepo->content_by_area($id);
        $content_area = $contentAreaRepo->find($id);

        return view('admin.contents.list', ['contents' => $contents,
                                            'area' => $content_area]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'column_type'=> 'required',
            'section'=> 'required',
            'title'=> 'required',
        ]);

        $content = new Content;
        
        $content->column_type                = $request->input('column_type');
        $content->content_area_id            = $request->input('section');

        $content->block_margin_top           = $request->input('block_margin_top');
        $content->block_margin_bottom        = $request->input('block_margin_bottom');

        $content->title                      = $request->input('title');
        $content->title_color                = $request->input('title_color');
        $content->title_size                 = $request->input('title_size');
        $content->title_position             = $request->input('title_position');
        $content->title_margin_top           = $request->input('title_margin_top');
        $content->title_margin_bottom        = $request->input('title_margin_bottom');

        $content->content                    = $request->input('content');
        $content->content_color              = $request->input('content_color');
        $content->content_size               = $request->input('content_size');
        $content->content_position           = $request->input('content_position');
        $content->content_margin_top         = $request->input('content_margin_top');
        $content->content_margin_bottom      = $request->input('content_margin_bottom');

        $content->block_2_margin_top         = $request->input('block_2_margin_top');
        $content->block_2_margin_bottom      = $request->input('block_2_margin_bottom');

        $content->title_2                    = $request->input('title_2');
        $content->title_color_2              = $request->input('title_color_2');
        $content->title_size_2               = $request->input('title_size_2');
        $content->title_position_2           = $request->input('title_position_2');
        $content->title_margin_top_2         = $request->input('title_margin_top_2');
        $content->title_margin_bottom_2      = $request->input('title_margin_bottom_2');

        $content->content_2                  = $request->input('content_2');
        $content->content_color_2            = $request->input('content_color_2');
        $content->content_size_2             = $request->input('content_size_2');
        $content->content_position_2         = $request->input('content_position_2');
        $content->content_margin_top_2       = $request->input('content_margin_top_2');
        $content->content_margin_bottom_2    = $request->input('content_margin_bottom_2');

        $content->save();

        return back()->with('success','New block added');
    }

    public function edit(ContentRepository $contentRepo, $id)
    {
        $content = $contentRepo->find($id);

        return view('admin.contents.edit' , ['content' => $content]);
    }

    public function update(ContentRepository $contentRepo, Request $request)
    {
        $content = $contentRepo->find($request->input('id'));

        $content->column_type                = $request->input('column_type');
        $content->content_area_id            = $request->input('section');

        $content->block_margin_top           = $request->input('block_margin_top');
        $content->block_margin_bottom        = $request->input('block_margin_bottom');

        $content->title                      = $request->input('title');
        $content->title_color                = $request->input('title_color');
        $content->title_size                 = $request->input('title_size');
        $content->title_position             = $request->input('title_position');
        $content->title_margin_top           = $request->input('title_margin_top');
        $content->title_margin_bottom        = $request->input('title_margin_bottom');

        $content->content                    = $request->input('content');
        $content->content_color              = $request->input('content_color');
        $content->content_size               = $request->input('content_size');
        $content->content_position           = $request->input('content_position');
        $content->content_margin_top         = $request->input('content_margin_top');
        $content->content_margin_bottom      = $request->input('content_margin_bottom');

        $content->block_2_margin_top         = $request->input('block_2_margin_top');
        $content->block_2_margin_bottom      = $request->input('block_2_margin_bottom');

        $content->title_2                    = $request->input('title_2');
        $content->title_color_2              = $request->input('title_color_2');
        $content->title_size_2               = $request->input('title_size_2');
        $content->title_position_2           = $request->input('title_position_2');
        $content->title_margin_top_2         = $request->input('title_margin_top_2');
        $content->title_margin_bottom_2      = $request->input('title_margin_bottom_2');

        $content->content_2                  = $request->input('content_2');
        $content->content_color_2            = $request->input('content_color_2');
        $content->content_size_2             = $request->input('content_size_2');
        $content->content_position_2         = $request->input('content_position_2');
        $content->content_margin_top_2       = $request->input('content_margin_top_2');
        $content->content_margin_bottom_2    = $request->input('content_margin_bottom_2');

        $content->save();

        return back()->with('success','Edited correctly');
    }

    public function delete(ContentRepository $contentRepo, $id) 
    {
        $content = $contentRepo->delete($id);

        return back()->with('success','Removed correctly');
    }

}
