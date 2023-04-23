<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationClass extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->route()->getName()) {
            case 'accessory_create':
                return [
                    'name'=> 'required',
                    'amount'=> 'required',
                    'safety_level'=> 'required',
                ];
                break;
            case 'person_create':
                return [
                    'name' => 'required',
                    'surname' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ];
                break;
            case 'content_create':
                return [
                    'column_type' => 'required',
                    'section' => 'required',
                    'title' => 'required',
                ];
            case 'order_create':
                return [
                    'name' => 'required',
                    'surname' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'width' => 'required',
                    'height' => 'required',
                    'place' => 'required',
                    'color' => 'required',
                ];
                break;
            case 'report_create':
                return [
                    'start' => 'required',
                    'end' => 'required',
                ];
                break;
            case 'tattoo_create':
                return [
                    'name'=> 'required',
                    'picture_number'=> 'required',
                ];
                break;
            case 'visit_create':
                return [
                    'client_id' => 'required',
                    'employeer_id' => 'required',
                    'tattoo_id' => 'required',
                    'amount' => 'required',
                    'date' => 'required',
                    'time' => 'required',
                ];
                break;
            default:
                return [];
    }
    }
}