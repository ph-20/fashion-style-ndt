<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            //  Change Password
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            //  Change Password
            'password.required' => 'Trường mật khẩu bắt buộc nhập.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max' => 'Mật khẩu không quá 30 ký tự.',
            're_password.required' => 'Trường xác nhận mật khẩu bắt buộc nhập.',
            're_password.same' => 'Xác nhận mật khẩu sai.',
        ];
    }
}
