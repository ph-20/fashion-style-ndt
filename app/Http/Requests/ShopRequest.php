<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password',
            'name' => 'required',
            'birthday' => 'required|date',
            'phone' => 'required',
            'address' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Trường email yêu cầu bắt buộc phải nhập',
            'email.unique' => 'Trường email này phải là duy nhất',
            'email.email' => 'Email không đúng định dạng,xin nhập lai!',
            'password.required' => 'Trường password yêu cầu phải nhập',
            'password.min' => 'Password ít nhất phải có 6 kí tự',
            'password.max' => 'Password có tối đa không quá 30 kí tự',
            're_password.required' => 'Re_password yêu cầu phải nhập',
            're_password.same' => 'Re_password phải giống với password',
            'name.required' => 'Name bắt buộc phải nhập',
            'birthday.required' => 'Birthday bắt buộc phải nhập',
            'birthday.date' => 'Birthday không đúng định dạng',
            'phone.require' => 'Phone bắt buộc phải nhập',
            'address.required' => 'Address bắt buộc phải nhập',
        ];
    }
}
