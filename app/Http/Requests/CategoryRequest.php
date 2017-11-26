<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            name => 'required',
            type => 'require'
        ];
    }

    public function messages()
    {
        return [
            //  Validate Category
            'name . required' => 'Trường tên này bắt buộc nhập . ',
            'type. required' => 'Trường loại bắt buộc nhập . '
        ];
    }
}
