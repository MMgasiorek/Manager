<?php

namespace App\Repositories;

use App\Models\Visit;

use DB;

class VisitRepository extends BaseRepository{

    public function __construct(Visit $model){

        $this->model= $model;
    }

    public function visits_list_by_employeer($id)
    {
        return $this->model->where('employeer_id', $id)->get();
    }

    public function accessories_to_update()
    {
        return $this->model->orderBy('id', 'desc')->first();
    }

    public function total_amount_by_employeer($id)
    {
        return $this->model->where('employeer_id', $id)->sum('amount');

    }

    public function total_time_by_employeer($id)
    {
        return $this->model->where('employeer_id', $id)->sum('time');
    }

    public function peroid_amount_by_employeer($id, $start, $end)
    {
        return $this->model->where('employeer_id', $id)
                           ->whereBetween('date', [$start, $end])->sum('amount');

    }

    public function peroid_time_by_employeer($id, $start, $end)
    {
        return $this->model->where('employeer_id', $id)
                           ->whereBetween('date', [$start, $end])->sum('time');

    }

    public function total_amount()
    {
        return $this->model->sum('amount');
    }

    public function total_time()
    {
        return $this->model->sum('time');
    }

    public function total_visits()
    {
        return $this->model->sum('id');
    }


}