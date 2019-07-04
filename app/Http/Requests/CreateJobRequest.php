<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateJobRequest extends Request
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
        return [
            'description' =>'required',
            'title' => 'required',
            'salary'=>'required|integer',
            'work_exp'=>'required|integer'
            //
        ];
    }
}
