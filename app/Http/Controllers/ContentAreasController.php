<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ContentAreaRepository;

class ContentAreasController extends Controller
{
    public function index(ContentAreaRepository $contentAreaRepo)
    {
        $content_areas = $contentAreaRepo->getAll();

        return view('admin.contents.index' , ['content_areas' => $content_areas]);
    }
}
