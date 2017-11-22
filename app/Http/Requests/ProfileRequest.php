<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password',
            'name' => 'required|min:6|max:50',
            'birthday' => 'required|date',
            'phone' => 'required|min:10|max:12',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            //  Validate User
            'password.required' => 'Trường mật khẩu bắt buộc nhập.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max' => 'Mật khẩu không quá 30 ký tự.',
            're_password.required' => 'Trường xác nhận mật khẩu bắt buộc nhập.',
            're_password.same' => 'Xác nhận mật khẩu sai.',
            'name.required' => 'Trường họ tên bắt buộc nhập.',
            'name.min' => 'Họ tên phải có ít nhất 6 ký tự.',
            'name.max' => 'Họ tên không quá 50 ký tự.',
            'birthday.required' => 'Trường ngày sinh bắt buộc nhập.',
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            'phone.required' => 'Trường điện thoại bắt buộc nhập.',
            'phone.min' => 'Điện thoại phải có ít nhấ 10 số.',
            'phone.max' => 'Điện thoại không quá 11 số.',
            'phone.integer' => 'Điện thoại phải là số.',
            'address.required' => 'Trường địa chỉ bắt buộc nhập.',
        ];
    }
}
