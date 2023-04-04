<?php

namespace App\Repositories;

use App\Models\Tattoo;

use DB;

class TattooRepository extends BaseRepository{

    public function __construct(Tattoo $model){

        $this->model= $model;
    }

}