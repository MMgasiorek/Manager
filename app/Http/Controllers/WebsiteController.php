<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContentRepository;

class WebsiteController extends Controller
{
    public function main(ContentRepository $contentRepo)
    {
        $content_id = 1;
        $contents = $contentRepo->content_by_area($content_id);

        return view('subpages.home', ['contents' => $contents]);
    }

    public function about(ContentRepository $contentRepo)
    {
        $content_id = 2;
        $contents = $contentRepo->content_by_area($content_id);

        return view('subpages.about_us', ['contents' => $contents]);
    }
}
