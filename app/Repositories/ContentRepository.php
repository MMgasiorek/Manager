<?php

namespace App\Repositories;

use App\Models\Content;

use DB;

class ContentRepository extends BaseRepository{

    public function __construct(Content $model){

        $this->model= $model;
    }

    public function content_by_area($id)
    {
        return $this->model->where('content_area_id', $id)->get();
    }

}