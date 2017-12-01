<?php

namespace Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CheckoutRequest extends FormRequest
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
        if (!Auth::check()) {
            return [
                'name' => 'required|min:6|max:50',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:12',
                'address' => 'required',
                'note' => 'required'
            ];
        } else {
            return [
                'note' => 'required'
            ];
        }
    }

    public function messages()
    {
        return [
            'email.required' => 'Trường email bắt buộc nhập.',
            'email.email' => 'Không đúng định dạng Email.',
            'name.required' => 'Trường họ tên bắt buộc nhập.',
            'name.min' => 'Họ tên phải có ít nhất 6 ký tự.',
            'name.max' => 'Họ tên không quá 50 ký tự.',
            'phone.required' => 'Trường điện thoại bắt buộc nhập.',
            'phone.min' => 'Điện thoại phải có ít nhấ 10 số.',
            'phone.max' => 'Điện thoại không quá 11 số.',
            'address.required' => 'Trường địa chỉ bắt buộc nhập.',
            'note.required' => 'Trường ghi chú bắt buộc nhập.'
        ];
    }
}
