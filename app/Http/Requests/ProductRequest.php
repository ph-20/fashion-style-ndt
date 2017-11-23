<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch ($this->method()){
            case 'POST':
                return [
                    'name'=> 'required',
                    'image'=> 'required|image',
                    'slug'=> 'required',
                    'price'=> 'required|integer',
                    'discount'=> 'required|integer',
                    'description'=> 'required',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'name'=> 'required',
                    'image'=> 'image',
                    'slug'=> 'required',
                    'price'=> 'required|integer',
                    'discount'=> 'required|integer',
                    'description'=> 'required',
                ];
            default:
                return [];
        }

    }

    public function messages()
    {
        return [
            'nam.required'=> 'Trường tên sản phẩm bắt buộc nhập.',
            'image.required'=> 'Trường hình ảnh bắt buộc nhập.',
            'image.image'=> 'Trường phải là hình ảnh.',
            'slug.required'=> 'Trường slug bắt buộc nhập.',
            'price.required'=> 'Trường giá sản phẩm bắt buộc nhập.',
            'price.integer'=> 'Trường phải là một số.',
            'discount.required'=> 'Trường giá khuyến mãi bắt buộc nhập.',
            'discount.integer'=> 'Trường phải là một số.',
            'description.required'=> 'Trường mô tả sản phẩm bắt buộc nhập.',
        ];
    }
}
