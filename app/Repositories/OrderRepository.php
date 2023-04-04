<?php

namespace App\Repositories;

use App\Models\Order;

use DB;

class OrderRepository extends BaseRepository{

    public function __construct(Order $model){

        $this->model= $model;
    }

}