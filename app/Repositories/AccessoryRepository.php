<?php

namespace App\Repositories;

use App\Models\Accessory;

use DB;

class AccessoryRepository extends BaseRepository{

    public function __construct(Accessory $model){

        $this->model= $model;
    }

    public function get_fillable()
    {
        $data = ['consume_needle', 'consume_mask', 'consume_ink','consume_glove',
        'consume_liquid', 'consume_healing','consume_soap','consume_anesthesia',
        'consume_calque','consume_holder'];

        return $data;
    }

}