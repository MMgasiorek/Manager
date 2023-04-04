<?php

namespace App\Repositories;

use App\Models\ContentArea;

use DB;

class ContentAreaRepository extends BaseRepository{

    public function __construct(ContentArea $model){

        $this->model= $model;
    }

}