<?php

namespace App\Repositories;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationClass;

use DB;

class VisitRepository extends BaseRepository{

    public function __construct(Visit $model){

        $this->model= $model;
    }

    public function create_new_visit(ValidationClass $request)
    {
        $visit = new Visit;
        $visit_fields = $visit->getFillable(); 
        $field_counter = count($visit_fields);

        for($i=0 ; $i < $field_counter ; $i++)
        {
            $field_name = $visit_fields[$i];
            $visit->$field_name = $request->input($visit_fields[$i]);
        }
        $visit->save();
    }

    public function visits_list_by_employeer(int $id)
    {
        return $this->model->where('employeer_id', $id)->get();
    }

    public function accessories_to_update()
    {
        return $this->model->orderBy('id', 'desc')->first();
    }

    public function total_amount_by_employeer(int $id)
    {
        return $this->model->where('employeer_id', $id)->sum('amount');

    }

    public function total_time_by_employeer(int $id)
    {
        return $this->model->where('employeer_id', $id)->sum('time');
    }

    public function peroid_amount_by_employeer(int $id, $start, $end)
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