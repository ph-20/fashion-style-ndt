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
            'name' => 'required|min:3|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trường tên bắt buộc nhập.',
            'name.min' => 'Tên phải có ít nhất 3 ký tự.',
            'name.max' => 'Tên không quá 20 ký tự.',
        ];
    }
}
