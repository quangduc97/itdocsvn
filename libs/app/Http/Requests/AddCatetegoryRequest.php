<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCatetegoryRequest extends FormRequest
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
            //
            'cate_name' => 'unique:categories,cate_name'
        ];
    }

    public function messages()
    {
        return [
            //
            'cate_name.unique' => 'Tên thể loại đã bị trùng !!!'
        ];
    }
}
