<?php

namespace App\Repositories;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationClass;

use DB;

class ContentRepository extends BaseRepository{

    public function __construct(Content $model){

        $this->model= $model;
    }

    public function content_by_area(int $id)
    {
        return $this->model->where('content_area_id', $id)->get();
    }

    public function create_new_content(ValidationClass $request)
    {
        $content = new Content;
        $content_fields = $content->getFillable(); 
        $field_counter = count($content_fields);

        for($i=0 ; $i < $field_counter ; $i++)
        {
            $field_name = $content_fields[$i];
            $content->$field_name = $request->input($content_fields[$i]);
        }
        $content->save();
    }

    public function update_content(ValidationClass $request, $id)
    {
        $content = Content::find($id);
        $content_fields = $content->getFillable(); 
        $field_counter = count($content_fields);

        for($i=0 ; $i < $field_counter ; $i++)
        {
            $field_name = $content_fields[$i];
            $content->$field_name = $request->input($content_fields[$i]);
        }
        $content->save();
    }

}