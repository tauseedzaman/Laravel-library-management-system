<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebookRequest extends FormRequest
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
            'name' => 'required',
            'category_id' => 'required',
            'auther_id' => 'required',
            'publisher_id' => 'required',
        ];
    }
}
