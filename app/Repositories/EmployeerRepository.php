<?php

namespace App\Repositories;

use App\Models\Employeer;

use DB;

class EmployeerRepository extends BaseRepository{

    public function __construct(Employeer $model){

        $this->model= $model;
    }

}